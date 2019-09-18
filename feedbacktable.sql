CREATE TABLE `feedback`(
`id` int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`name` varchar(255) NOT NULL,
`email` varchar(255) NOT NULL,
`feedback` varchar(1000) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- by default storage engine for MySQL database starting from version 5.x is InnoDB

INSERT INTO feedback(name,email,feedback) VALUES
('Natalia','nataliakaleshi@gmail.com','PHP is pretty cool'),
('Jumbe.com','jumbeandvice@gmail.com','PHP is for streaming games especially EUEFA'),
('johnbosco','yooohDonJb@gmail.com','Bootstrap is pretty good');

/*

use backtick ( `), to sorround table name identifier and columns
name identifier

*/