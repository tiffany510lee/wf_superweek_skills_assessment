create database intake_form;

use `intake_form`;

CREATE TABLE `projects` (
    `Project Name` varchar(50) NOT NULL,
    `Project Charge code` varchar(10) NOT NULL,
    `Area` ENUM ('Americas', 'Europe', 'APAC') DEFAULT 'Americas',
    `Region` ENUM ('North America', 'South America', 'Europe', 'Asia', 'Africa',
                   'India') DEFAULT 'North America',
    `Current State Technology` ENUM ('Not started', 'In Progress', 'Complete',
                                     'Enhancement', 'Other') DEFAULT 'Not started',
    `Current State Technology Other` varchar(100),
    `Target Deadline` DATE,
    PRIMARY KEY  (`Project Name`)
);
