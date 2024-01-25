CREATE TABLE users (
  username VARCHAR PRIMARY KEY,      -- unique username
  password VARCHAR,                  -- password stored in sha-1
  name VARCHAR,
  email VARCHAR                       -- real name
);