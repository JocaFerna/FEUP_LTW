DROP TABLE IF EXISTS Users;

CREATE TABLE Users (
  username VARCHAR PRIMARY KEY,      -- unique username
  password VARCHAR,                  -- password stored in sha-1
  name VARCHAR,                      -- real name
  email VARCHAR                       
);

INSERT INTO Users(username, password, name, email) values ("testUser","7110eda4d09e062aa5e4a390b0a572ac0d2c0220","User Tester","test@example.com");

