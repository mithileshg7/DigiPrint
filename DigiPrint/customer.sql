

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE TABLE `orders` (
  `numberc` int(100) NOT NULL,
  `Type` varchar(11) NOT NULL,
  `numberbw` int(100) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `Delivery` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


