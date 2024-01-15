-- /\/\[]7_|\|/-\ 7_/\/\![-|\|!( |\|/-\7_\|/[- _|/-\|< (#([-$7_
CREATE DATABASE IF NOT EXISTS ratsite;
USE ratsite;

-- '|'[-/2/-\7_ |_|'|'\|/ó/27_ '|'/-\|3[-|_ę
CREATE TABLE visitors_log (
    id INT PRIMARY KEY AUTO_INCREMENT,
    ip_address VARCHAR(45),
    fingerprint VARCHAR(255),
    browser_info TEXT,
    screen_resolution VARCHAR(20),
    referral_source TEXT,
    usage_data TEXT,
    visit_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
