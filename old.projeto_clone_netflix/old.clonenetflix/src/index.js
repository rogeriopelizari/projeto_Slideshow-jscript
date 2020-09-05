import React, { useEffect, useState } from "react";
import Tmdb from "./Tmdb";
import MovieRow from "./components/MovieRow";
import FeatureMovie from "./components/FeatureMovie";
import Header from "./components/Header";

import "./styles.css";

export default function App() {
  const [moveList, setMoveList] = useState([]);
  const [featureData, setFeatureData] = useState(null);
  const [blackHeader, setBlackHeader] = useState(false);
  const [header, setHeader] = useState(false);
  useEffect(() => {
    loadAll();
  }, [header]);

  useEffect(() => {
    const scrollListener = () => {
      if (window.scrollY > 30) {
        setBlackHeader(true);
      } else {
        setBlackHeader(false);
      }
    };
    window.addEventListener("scroll", scrollListener);

    return () => {
      window.removeEventListener("scroll", scrollListener);
    };
  }, []);

  const loadAll = async () => {
    const list = await Tmdb.getHomeList();
    setMoveList(list);

    const originals = list.filter((item) => item.slug === "originals") || [];
    if (originals.length && originals[0].items.results) {
      const random = Math.floor(
        Math.random() * (originals[0].items.results.length - 1)
      );
      const original = originals[0].items.results[random];
      const originalDetail = await Tmdb.getMovieDetails(original.id, "tv");
      setFeatureData(originalDetail);
    }
  };

  const userClick = (e) => {
    e.preventDefault();
    setHeader(!header);
  };

  return (
    <div className="page">
      <Header header={header} black={blackHeader} click={userClick} />
      {featureData && <FeatureMovie data={featureData} />}
      <section className="lists">
        {moveList.map((item, key) => (
          <MovieRow key={key} title={item.title} items={item.items} />
        ))}
      </section>

      <footer>
        Curso Youtube B7web
        <br />
        Direitos de imagem para Netflix
        <br />
        Dados consumidos so site Themoviedb.org
      </footer>

      {moveList.length <= 0 && (
        <div className="loading">
          <img
            src={`https://www.filmelier.com/pt/br/news/wp-content/uploads/2020/03/netflix-loading.gif`}
            alt="loading"
          />
        </div>
      )}
    </div>
  );
}

