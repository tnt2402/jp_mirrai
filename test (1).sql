-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 20, 2020 lúc 01:36 PM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jp_students`
--

CREATE TABLE `jp_students` (
  `id` int(11) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `valuer` varchar(25) NOT NULL,
  `point_Reaction` int(3) NOT NULL,
  `point_Memorization` int(3) NOT NULL,
  `point_Pragmatic` int(3) NOT NULL,
  `point_communication` int(3) NOT NULL,
  `point_Concentration` int(3) NOT NULL,
  `point_Attitude` int(3) NOT NULL,
  `point_Planability` int(3) NOT NULL,
  `point_Health` int(3) NOT NULL,
  `point_Total` int(3) NOT NULL,
  `cmt_1` text NOT NULL,
  `cmt_2` text NOT NULL,
  `trungbinh` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `jp_students`
--

INSERT INTO `jp_students` (`id`, `fullName`, `photo`, `valuer`, `point_Reaction`, `point_Memorization`, `point_Pragmatic`, `point_communication`, `point_Concentration`, `point_Attitude`, `point_Planability`, `point_Health`, `point_Total`, `cmt_1`, `cmt_2`, `trungbinh`) VALUES
(3, 'Tran Minh Tuan', 'http://localhost:8080/a/jp_imgs_students/1/Untitled.png', 'Evaluation', 3, 4, 3, 4, 4, 5, 111, 11, 35, 'a', '', ''),
(4, 'Ha Mit', 'http://localhost:8080/a/jp_imgs_students/1/Untitled.png', 'Evaluation', 4, 4, 3, 4, 4, 5, 3, 5, 37, 'H?c r?t t?t', '', ''),
(5, 'Tuan dep trai', 'http://localhost:8080/a/jp_imgs_students/1/Untitled.png', 'Evaluation', 5, 4, 3, 4, 4, 5, 3, 5, 39, 'H?c r?t t?t', '', ''),
(9, 'Ha dep trai', 'http://localhost:8080/a/jp_imgs_students/1/Untitled.png', 'Evaluation', 6, 4, 3, 4, 4, 5, 3, 5, 17, 'H?c r?t t?t', '', ''),
(11, 'Tran Minh Tuan', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id_tai_khoan` int(11) NOT NULL,
  `ten_tai_khoan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nhom_tai_khoan` tinyint(2) NOT NULL,
  `ten_sinh_vien` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `anh_dai_dien` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_tao` datetime NOT NULL,
  `mk2` varchar(2555) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`id_tai_khoan`, `ten_tai_khoan`, `mat_khau`, `nhom_tai_khoan`, `ten_sinh_vien`, `sdt`, `anh_dai_dien`, `ngay_tao`, `mk2`) VALUES
(0, 'admin', '21232f297a57a5a743894a0e4a801fc3', 3, 'Tran Minh Tuan', '0978783283', 'avatardf.png', '2016-09-17 06:16:17', 'e2fc714c4727ee9395f324cd2e7f331f'),
(109, '1123123123123', 'cfe028664a35e15b051902f3ec866f280fd60b53', 1, 'Trân Đức', '12312313123', 'avatardf.png', '2016-10-27 18:43:56', ''),
(113, '21231231323', '9015867f2d6205412a2d8f154bb7ce4e8bfa30e6', 1, 'meo meo', '43141414', 'avatardf.png', '2016-10-29 23:11:23', ''),
(122, 'meomeo', '03d3d10d04646711a4a31af99ff49ea331975720', 1, 'ahihi', '123123', 'avatardf.png', '2016-11-05 00:11:09', ''),
(123, '101', '21232f297a57a5a743894a0e4a801fc3', 1, 'Trần Tuấn', '0982584480', 'avatardf.png', '2020-07-19 14:48:24', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `jp_students`
--
ALTER TABLE `jp_students`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id_tai_khoan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `jp_students`
--
ALTER TABLE `jp_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id_tai_khoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
