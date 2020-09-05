const API_KEY = "eda0e19f227f903661cf4db8911e547f";
const API_BASE = "https://api.themoviedb.org/3";
const LANGUAGE = "pt-BR";

/**
 * originais netflix
 * recomendados (trending)
 * em alta (top rapted)
 * ação
 * comédia
 * terror
 * romance
 * documentários
 */

const basicFetch = async (endpoint) => {
  const response = await fetch(`${API_BASE}${endpoint}`);
  const json = await response.json();
  return json;
};

export default {
  getHomeList: async () => {
    return [
      {
        slug: "originals",
        title: "Originais do Netflix",
        items: await basicFetch(
          `/discover/tv?language=${LANGUAGE}&api_key=${API_KEY}&with_network=123`
        )
      },
      {
        slug: "trending",
        title: "Recomendados para você",
        items: await basicFetch(
          `/trending/all/week?language=${LANGUAGE}&api_key=${API_KEY}`
        )
      },
      {
        slug: "toprated",
        title: "Em alta",
        items: await basicFetch(
          `/movie/top_rated?language=${LANGUAGE}&api_key=${API_KEY}`
        )
      },
      {
        slug: "action",
        title: "Ação",
        items: await basicFetch(
          `/discover/movie?language=${LANGUAGE}&api_key=${API_KEY}&with_genres=28`
        )
      },
      {
        slug: "comedy",
        title: "Comédia",
        items: await basicFetch(
          `/discover/movie?language=${LANGUAGE}&api_key=${API_KEY}&with_genres=35`
        )
      },
      {
        slug: "horror",
        title: "Terror",
        items: await basicFetch(
          `/discover/movie?language=${LANGUAGE}&api_key=${API_KEY}&with_genres=27`
        )
      },
      {
        slug: "romance",
        title: "Romance",
        items: await basicFetch(
          `/discover/movie?language=${LANGUAGE}&api_key=${API_KEY}&with_genres=10749`
        )
      },
      {
        slug: "documentary",
        title: "Documentários",
        items: await basicFetch(
          `/discover/movie?language=${LANGUAGE}&api_key=${API_KEY}&with_genres=99`
        )
      }
    ];
  },
  getMovieDetails: async (movieId, type) => {
    let data = {};
    if (movieId) {
      switch (type) {
        case "movie":
          data = await basicFetch(
            `/movie/${movieId}?language=${LANGUAGE}&api_key=${API_KEY}`
          );
          break;
        case "tv":
          data = await basicFetch(
            `/tv/${movieId}?language=${LANGUAGE}&api_key=${API_KEY}`
          );
          break;
        default:
          data = {};
          break;
      }
    }
    return data;
  }
};