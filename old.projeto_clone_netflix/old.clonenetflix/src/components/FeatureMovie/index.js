import React from "react";
import "./style.css";

export default function ({ data }) {
  const genres = [];
  for (let i in data.genres) {
    genres.push(data.genres[i].name);
  }

  return (
    <div
      className="featured"
      style={{
        backgroundSize: "cover",
        backgroundPosition: "center",
        backgroundImage: `url(https://image.tmdb.org/t/p/original${data.backdrop_path})`
      }}
    >
      <div className="featured--vertival">
        <div className="featured--horizontal">
          <div className="featured--name">{data.original_name}</div>
          <div className="featured--detail">
            <div className="featured--points">{data.vote_average} ponto(s)</div>
            <div className="featured--year">
              {new Date(data.first_air_date).getFullYear()}
            </div>
            <div className="featured--seasons">
              {data.number_of_seasons} temporada(s)
            </div>
          </div>
          <div className="featured--description">{data.overview}</div>
          <div className="featured--buttons">
            <a href={`watch/${data.id}`} className="featured--button--watch">
              &#10148; Assitir
            </a>
            <a href={`list/${data.id}`} className="featured--button--list">
              &#10010; Minha lista
            </a>
          </div>
          <div className="featured--genres">
            <strong>Gêneros: </strong> {genres.join(", ")}
          </div>
        </div>
      </div>
    </div>
  );
}
