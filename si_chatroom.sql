
--
-- Database: `si_chatroom`
--

CREATE DATABASE IF NOT EXISTS `si_chatroom` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `si_chatroom`;

-- --------------------------------------------------------

--
-- Table structure for table `connect_now`
--

DROP TABLE IF EXISTS `connect_now`;
CREATE TABLE `connect_now` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(250) NOT NULL,
  `PHONE` varchar(15) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `connect_now`
--
ALTER TABLE `connect_now`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `connect_now`
--
ALTER TABLE `connect_now`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;