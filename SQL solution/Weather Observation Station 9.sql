//This problem can be solved easily using 'like' operation and the other way is using regex.
// 1. using like operator: 
SELECT DISTINCT CITY FROM STATION WHERE NOT (CITY LIKE 'a%' OR CITY LIKE 'e%' OR CITY LIKE 'i%' OR CITY LIKE 'o%' OR CITY LIKE 'u%');

// 2. using REGEXP:
SELECT DISTINCT CITY FROM STATION
WHERE CITY REGEXP '^[^aeiou]';
