import React from "react";
import "./style.css";

export default function ({ black, click }) {
  return (
    <header className={black ? "black" : ""}>
      <div className="header--logo">
        <a href="/" onClick={click}>
          <img
            src={`https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Logo_Netflix.png/800px-Logo_Netflix.png`}
            alt={`Netflix`}
          />
        </a>
      </div>
      <div className="header--user">
        <a href="/" onClick={click}>
          <img
            src={`https://pbs.twimg.com/profile_images/1240119990411550720/hBEe3tdn_400x400.png`}
            alt={`User`}
          />
        </a>
      </div>
    </header>
  );
}