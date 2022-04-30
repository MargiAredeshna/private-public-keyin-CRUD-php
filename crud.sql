-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2022 at 09:08 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydata`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `name`, `email`, `phone`, `city`) VALUES
(20, 'DZPOl284lcumf7S9OIF2VTUKhIiGLQE58vkLQzEebxVEigE+bInuEmsYfCPT+eP19L+RBvgY2dcKlOyQPRUDMGUe8mOMjktCOL+9o1XfZRDc96quaLJr3cdzFWiOlyiU7QJGM8DmpPjqRLUlbo8IpDr51O1twkbT8J1MS3/RSiRXKM/TMbLCSmm7zoYDggWPbzefrJnFRBQ33N+dkMtZ0lWcuBt66FgP8n/KZNOQrzptQIwP+gHBR5licDC9zcNEwxlNGcdXajAfIkTeAWTX6zn9X6D7V/ebdxMfecXfzgBwZsPLhKPJ715VfMGJXEQASDJxUDOdOEDSCxnbxZlKkQ==', 'XxKqopJrcsYjdHpPzLh1LtdabvpCm5ADx+oIOK7EaItGo4Y6V9Rg5PVzyi2HSfE2XtZTQ0lFxpW4FpZNIcPQRdS7vACclUQ6IthY9IGVuaS5wBwP1RMgE0YNqn0pAsEuiiP3m5e8gDynlzqbPCBBUvyILTOcEwJJjxm15PncLucsp6NqIDyuw43hWX1MD5sWQjy6hBiN6qtPCZnZF/p7tpPjn5yYQgmnXLYsacr18m9XkOYblPCsAf3z6nIlWds4531PZgA+RPWgvZTjiwD37bOOZhlaJ8oOgHhdl7+tnPlrwmfFY7RFGWbUwfyZGGeTegU6Sj5MKL35Tt3Mi5b3yA==', 'YcMQR8xyEb/cW/fv/PiAtCJiWX71KmyEbzX9NzHK4DnnsJr3osLlCP4X3xdudNP0AXS4pOdaikmL4nXVIG1tW6Cza/qSlRr9bOv1M1MK/QE7OP2LTP7LckAVQDGpeGwPrRnqApL14CxnIYfR+u7v+U/1/tpQMvWMoJw+L5IyqhQ77uTVhmBBcqyokVPdLlXrhTzFtSo8m7b+xiE4KlKqbd9e3z8vEU4CdJhVkZlpn2q6YcSdKWZMTuCQuWzeF7jmPjp3UwToqbXT0JM1+hSaaumulZTM9xQ/rwuwf7n2g+l3vOM3F7qonR4lTshKo4xJw+oYHD03v5M24IgKB2NxZw==', 'l5TJ346Lz9zwAxsHoYUc0ZOd0AgOwKhwpdlNYilmUiOAvNVjjWYtsS4Yy3vSQeQ/M3kVI6xHqgF4P+SiVJ4COww742JGL9YMhW0ThDRotOcG5aVAsdWpLTNNSza7vtV9790b2NP4lG4rFVRnjrAPY5op/iAriJRYlE0c13fBg5WSTFOovsux0aMwTSNjdLIJUz3c6VSzEOdptRm6zpFF1BhOlR3hCWA67K+zluZai1401yOfa/rDdz94EuB4+g237Rip4cy9Ncv0FKuthngX9T+9bcJDbxWlKyAWR905TRMt1zUJ5FNaLhhl0dV6CoxR5E/p5pn7fUppmx0Sbfn8HQ=='),
(21, 'ZyhMkKYsAPp59T+qfpTabH82DNM0/nvDIFIG85AcHqVhPl+Oo7BmA2C+WBG4CTyUgrKG7cjoffwr1tLMKDmuns3e9m1Ukr2dAIzyNQB9Cx6FLu+58tM/mZcKEyEJ8gxeicuAnSVcmwywlnI/GEsAxJzHhGt6eOsPboCURgjOuBJXDIBdyBTKqglJqssXakI1SHTlv/03pWMZ3mOrx3UWeYh6mXJHyzCANJPuAyL0cmc8YO6Be+gi8S9+dCSerS3SXDr+QsCW9xR7EwI/tW7sON0Qqy7HxT7d3azGSt4t09dib7yhr5KZgfh9ODqwmg/Ff9H7QcY9PIibwsX6PQxTZA==', 'BtmeqJ1qSJOFVm2SmIji71u7NCDn+hkXjQNMR2329WSFjfR1AGZuDtD9ZFqc4SjIA8uDt720Vxw/+YuoStdnje6gklDLwYIIG2cZPQ77rGjbBc2z2uPSO2AEYHoDAsBo0oP2U+nBNjuuEoANnmQjwmWfCV0z+ln2tWSynNJ+I62VL0+FcwFmL3FcEWNPO0aAQvWaDR4ja3HK88YDHwmiuxe72yVvMLGcCLAcpxb1r/Wtwg2zXJJelHkrDWiMP7ZY+6ClqHwLNllPiV2O0OWe65Qsc3caaoBx22z0M5n0Ju8ow8XKZKs6hWWsMW+/xYVDAXD/TON2+3NJh+IxQ8IwUw==', 'Zat31VLFlR1h8exNADd7o4pNoAe95nWzaxiMGoXf6B7eXVhbUWQ4y+hCAkEeUBaBW9osRwBCbQNaF87aNyfBY7TiYZxmYk8/aSnp4z4C44YtEZGcdfKafZlnKYAKsOzMrmCu49ueep/2UQyDEVHaffUkBXMLuWd/MyWqwBMvpypbAMA4PNTFsN+9eK+43RRpD7FWOm/6Wb7dlbUs3LG9NtirlqMW5xPuQtdPzwJ3YsHI2J52e7mnKOtOK8ETykDgWh/ibGZjMh6fCBDFKDm2WBm18EvKMF5dRR1cYbfF0qMUBAU8Gdq0TqO+tOPFAcRM6IXMrzdcBQObuTys6Pv6zw==', 'JNyjsUqRcZh1DWRo4Iwoopn1up0IMT7k3S6HdP/OOCLSLmAKkivtqB3nEZsYYg2HRCWD8B+N4ZeWGiWUUwgCvWoG1dD26oq5h1n9tb2XTjqIFhqboSdf4Rz9OnCBdfyk+ttNU6GUhCECK+QyafKNg7f8mF3hJ/oBnj0t+t54HLqxqX7/8cLfw/gadZ5qinzi/fUsJYl5nIXHO0CyLQpSvU8W7bcdalN8TVzdamJoAXHsiH2TnEBGnmyym5Yvel2tM+nkks/FQjKaW5v8LDofmqVNgyYAPSsvcorBa8RbclBXsvUTzbh/ymVHt8OtPSUvMgLwQy0nX3d7hu7WTfOTWw=='),
(22, 'ctUkOtpvfC3BMTAoApGjW+84MxOr+3bvmwTQqlmg5VPsXgM6F6eR8O+xGz7yl3eEIHkVurtqJTxgLCFNNrynsEtGr6rSOZkRx1Xn+6EhvprIAAAq7MLdM6WrCDrRQNgh8tJr2X/BJmA6VKfXxIujtkdQ0ka5X6EA7nnmJ98RBhuF6WCJd9vW96DYiWnIy9HiTsQmqR4gLF8DUsf7RbysuMeaTMruf66bCbZC7VNMXwf1u4ypwVhTjbPZToElULTGU09mqi0Z3uHSCcZSp4+lUJhls8BgQ62fK3smKHp8MFLtHkhkOZ5qcKvvY+ynyW8I3rL/ce1A9w2mCm80xqAQ1g==', 'ioTVQdsnjSfp7d6RYfD9H8X631Fr5XyTc393bg9KkYHufB5Ln7rWkPkQG5fY5G5UQr88U7MCBjKftxugzSMlg7rr9JiNpe4BAyE30Sl3sbHe4T8TE42raZtE12qAC4aDZSI+QDPkoiHoDdLoEqT6+w1NGgUGl0tKggbd4QG2Z+GieCjhoQJ1wXiU456TyH/4QhpPMXjK8GvG2QnyYAtTkU6mWte/t4qfNfqronYRcZ4SEX0NaMrYK5vS6ERCQtite8XuY4gojceg2PKaBelzcfhQsKoFEMRQ9Mu9/9uEqO2MF4H/2xtFTgwuVmyf9QsBh6A08V9l5oarnbZ/fYGsZA==', 'ESskzIRHKaE6EP8ML9Joq7HkSxv0G/bRtXgmB7AkFsdeDcRrQ63Xfh7eZujOD2CNXaSlASoyAwrYATNTbnSdJ6elCudyp0u096N4J7XT6X/58lDoGDihFAi12Ah1RrQSwWxv3iCYIJiGeHgMs0D05ABmI2yanv8pNsBFG1NAw4UuaAiTfUmwMT3wzmLVwPsNYOR1pTa2cPG2dkvpzQcnrOc3G2FeZXW+Kqfe0L8JcKwVHa43VfCQn8GeTt/+epY8Xq5y4Pyv3lB9pxDKF8mboamHutKXGsJTl9VB7W1OD1NjE7yx/UGAvzXAFJjWvIZA/fJCR9mUljhTWk53EHBS6w==', 'mrgdhS3u/DgJgVTBsC7Bm8r8ikbiKnMbWXkJUFlS+roxBeiR4VQqIQSkiTlUlXzc5BhhneQ007ugxBY87wNPXwPNlbJpBU7dVCfQFQ1rkWv+GN43JT5Bj4/sFo8EDPRMI4thQIj+fXTJH6vRQW69iT6G9R+qCrCDBveEwyLOkfvFMf1+QACg1cAjGEA8JyxCJ0BeCFNVIauQRtghSXlJumPl+Be5pqvcONttWlhgcMCMxg/WFb6GSRlcAYFKI2Wn+ipahJGFYdh5W6dVMg0jEymHteA9aAybWaU8aj8odVo6OCLzltnxirkacyX40aYeQu0LudAEEiwweN4PdXFcZA=='),
(23, 'd+e+0H/e83/1LJk64pcHQtHMhihRpXnavz6fHP+N5kGo2wT2NnwTypU1KsFHDMev9Vh8MkPUF9e2mN+bJhj2SKIDJr2uy+rKk7dvJAG0j8cOt70zds+dLHJj/FCugrLx2SvPBMloXB65bW+ihZhMEzV+puTlRRlJKMuqVXbnW27zrMoDZ0QM7sdGuIjYQUqRWhk3enwk536Ki1Bqr9AxwcRlqpNsRVv/YtobdbOJ8vXnoFbCuspYdIYkFog0r0wm7g5PZSwpwnHXZd10KS+i0gFkTcmiINPN3lx34kvgWLRiSX45pi9azQSCnjt1IOkr9kUnn+88UR9QKjhrm3MYZA==', 'CNEdLVMaUA4zJf2n9f8/OUX7q7eJMFXCI6xjPb/czu+ibLMnfDHzBdo4W/1F+mnoDOtme5c++iI5YaZB7zpEPddHgJr8qmwIf2HpZM27oM6LrtDEo7XAgoXui4SHZY/uq/C4wuUPsMtDXJYTmBpayK49muEaTxG6RopjDBNQk3BO6VFnGt7R5L6KPpkMsOE+jqo4rr6maY/USqiIfCoD6NG1ek2+UMpkov6pduCWQHz625jL1O59cbZx5RvX0RUrD8L/Cpbncg6ewGyV+V5LDbUCayPsayL+JZdMLGjaBetq24WfRV5JWMzdFTik/Qztnbk5kekB5nLdsBqQ9AbG9A==', 'dtdid9VGj1UKuuucJ5l+SXi5/8/1hR6p7gqi0D10SXPiKj83Tw2fVuaRSBNL+vATFh3dex9wtjmU1sRYNS6b5uJ3/gfmSB6FryIPbdt1zlwqXmhIEKcPNaASMYQP9B6ooSJLJqIwpKsY8lSmbvBeL0ULuMtVBoQSDCWyZgYNk1aVxiVwOQ3gx721HYiMMicG4zdj7pJN4Vz3KxjjObuVzVxeOt+NrTRNDgWphHuECzy14KVUEPZooZ7haw1T0UHZ2fpy/zYkkaBpX4DZ2VN8c8R4p3py8wDGYQJWfcABMMp1uaa00yFRQix2CjKHEJhEVRFuOawMWzr0ZgByQI76ZA==', 'GhjhXeO553FIuBbE4Lt/hXgtPaMFyDHkPbdTqXggDbIc0/okkiLJcIZCYivFSP2QLWKpyIU0dKFrE9vDLRdODnlO2F4PwLTwQTCheozGjCrM4DgunEoaeqqv9o9p/6/bhlv0/VjYjBwJIoge1e7/o8jRsFsXNTG7vJEQYrSb1gPihdjyd2lD9SzBcMELsX+id1ROAcoa4C0u4I/NyWhqvtavisKi9MbHgfd8D/o0ayYM/IU+zb9mY3mEIGUr/L7b61yX9MwUQfucVffJwBG/0dXtqqhHk8ojcVfO+XunAj7ieDWztJel3scVWwDANpo5j0SPpiGeDzPOPnbzZPU3cQ==');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
