import React, { useState } from "react";
import NavigateBefore from "@material-ui/icons/NavigateBefore";
import NavigateNext from "@material-ui/icons/NavigateNext";
import "./style.css";

export default function ({ title, items }) {
  const [scrollX, setScrollX] = useState(0);
  const handleLeft = () => {
    let x = scrollX + Math.round(window.innerWidth / 2);
    if (x > 0) {
      x = 0;
    }
    setScrollX(x);
  };
  const handleRight = () => {
    let x = scrollX - Math.round(window.innerWidth / 2);
    let listWidth = items.results.length * 150;
    if (window.innerWidth - listWidth > x) {
      x = window.innerWidth - listWidth - 60;
    }
    setScrollX(x);
  };
  return (
    <div className="movierow">
      <h2>{title}</h2>
      <div className="movierow--bofore" onClick={handleLeft}>
        <NavigateBefore style={{ fontSize: 50 }} />
      </div>
      <div className="movierow--next">
        <NavigateNext style={{ fontSize: 50 }} onClick={handleRight} />
      </div>
      <div className="movierow--listarea">
        <div
          className="movierow--list"
          style={{
            marginLeft: scrollX,
            width: items.results ? items.results.length * 150 : 0
          }}
        >
          {items &&
            items.results &&
            items.results.length > 0 &&
            items.results.map((item, key) => (
              <div className="movierow--item" key={key}>
                <img
                  src={
                    item.poster_path
                      ? `https://image.tmdb.org/t/p/w300${item.poster_path}`
                      : "https://via.placeholder.com/300x450"
                  }
                  alt={item.original_title}
                />
              </div>
            ))}
        </div>
      </div>
    </div>
  );
}