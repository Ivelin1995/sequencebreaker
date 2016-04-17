CREATE DATABASE IF NOT EXISTS sequencebreaker;
USE sequencebreaker;
DROP TABLE IF EXISTS sequences;
CREATE TABLE IF NOT EXISTS sequences (id INT PRIMARY KEY AUTO_INCREMENT, formula VARCHAR(128), numbers VARCHAR(128) NOT NULL, difficulty INT);
INSERT INTO sequences VALUES
('1', 'Xn = (2/3)n', '2/3 4/3 2 8/3 10/3 4', '1'),
('2', 'Xn = n^2 + 2', '3 6 11 18 27', '3'),
('3', 'Xn = 3n + 4','7 10 13 16 19', '1'),
('4', 'Xn = n^2 * -1', '-1 4 -9 16 -25', '2'),
('5', 'Xn = n^3 - n', '2 6 24 60 120', '3'),
('6', 'Xn = Xn-1 + Xn-2(fibonacci numbers!)', '... 8 13 21 34 55', '2'),
('7', 'Xn = 2 + 3n', '5 8 11 14 17', '1'),
('8', 'Xn = 29 - 4n', '25 21 17 13 9', '1'),
('9', 'Xn = (n^2 + n)/2+3', '4 6 9 13 18 24', '3'),
('10', 'Xn = 3^(n–1)', '... 81 243 729 2187 6561', '1'),
('11', 'Xn = Xn-1 + Xn-2 + Xn-3', '1 2 3 6 11 20 37 68 125', '3'),
('12', 'X2=X1*2, X3=X2-1, X4=X3*2, etc', '3 6 5 10 9 18 17 34 33', '2'),
('13', 'X2=X1+2, X3=X2*2, X4=X3+2, etc', '2 4 8 10 20 22 44', '2'),
('14', 'X2=X1+1, X3=X2+(n/2+1), X4=X3+1, X5=X4+(n/2+1), etc', '1 2 4 5 8 9 13 14 19 20', '3'),
('15', 'X2=X1*(n/2+1), X3=X2+n/2, X4=X3*(n/2+1), X5=X4+n/2, etc', '3 3 4 8 10 30 33 132 136 680 685', '3'),
('16', 'Xn = 14n + 1', '15 29 43 57', '1'),
('17', 'Xn = n^2-1', '0 3 8 15 24 35 48', '2'),
('18', 'Xn = Xn-1 + 3/2', '2/5 19/10 17/5 49/10 32/5', '3'),
('19', 'Xn = n^2 -n', '0 2 6 12 20 30 42', '1');
