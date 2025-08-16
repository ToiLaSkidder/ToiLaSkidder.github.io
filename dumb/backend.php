<?php

// --- Theme Configuration Section ---
include 'theme.php'; // Include the theme definitions file

// Set the desired theme name here.
// Available themes:
// [1]'Winter Wonderland'
// [2]'Halloween Theme'
// [3]'Botanical/Nature Theme',
// [4]'Dark Mode Minimalist'
// [5]'Sunset Gradient'
// [6]'Retro/Vaporwave',
// [7]'Candy Pop / Pastel Sweet'
// [8]'Cyberpunk Theme'
// [9]'Japanese Zen'
// [10]'Dreamy Galaxy'
$current_theme_name = "Cyberpunk Theme"; // <--- CHANGE THIS TO SELECT YOUR THEME

// --- General Information Section ---
// Variables used in <title> and general page content
$site_title = "MCT SMP";
$welcome_title = "Chào mừng bạn đã đến với MCT SMP!";
$welcome_tagline = Đây là một server Lifesteal với nhiều điều kỳ diệu!.";
$explore_button_text = "Khám phá";

// --- Navbar Section ---
// Variables related to the navigation bar and server status display
$announcement_ticker_text = Tham gia discord để cập nhật tin tức mỗi ngày!!";
$server_status_loading = "Đang tải...";
$server_status_offline_error = "Ngoại tuyến (Lỗi)";

// --- Server Info Section ---
// Variables for the server status display and action buttons
$server_info_title = "Thông tin server";
$server_status_loading_message = "Đang tải thông tin...";
$server_status_offline_message = "Server hiện đang ngoại tuyến.";
$copy_ip_button_text = "Lấy IP: mctsmp.work.gd"; // Updated IP for consistency
$discord_button_text = "Tham gia Discord";
$rules_button_text = "Đọc luật server";
$store_button_text = "Xem cửa hàng";
// IP Address for the server (used in API calls and copy functionality)
$server_ip = "mctsmp.work.gd"; // Crucial for the API to work with your server
$discord_invite_link = "https://discord.gg/t3MJ8E3ppm"; // Link Discord
$store_link = "https://store.mctsmp.work.gd/"; // Store

// --- Events & News Section ---
// Variables for the events and news cards
$events_news_title = "Events & Thông báo";
$event1_title = "Server hiện đang bảo trì để cải tiến";
$event1_description = "Mong các bạn thông cảm";
$event1_date = "13/08/2025";
$event2_title = "";
$event2_description = "";
$event2_date = "";
$view_all_news_button = "Xem tất cả thông báo";
$view_all_news_link = "https://discord.gg/t3MJ8E3ppm"; // View All News

// --- Server Rules Section ---
// Variables for the server rules list
$server_rules_title = "Luật lệ";
$rule1_text = "<strong>Không có hành vi lợi dụng bugs/dupe.</strong>.";
$rule2_text = "<strong>Hãy tôn trọng khi trò chuyện.</strong> Không tục tĩu, spam hoặc xúc phạm người khác.";
$rule3_text = "<strong>Không sử dụng phần mềm thứ ba.</strong>";
$rule4_text = "<strong>Không được mạo danh admin hoặc người chơi khác.</strong>";
$rule5_text = "<strong>Báo cáo bất kỳ người vi phạm quy tắc nào cho admin.</strong> Đừng tự mình giải quyết vấn đề.";

// --- How to Join Section ---
// Variables for the accordion steps to join the server
$how_to_join_title = "Cách tham gia";
$step1_title = "Bước 1: Mở Minecraft";
$step1_description = Trước khi chạy, hãy chọn phiên bản từ 1.21 trở lên (ví dụ: 1.21.4).";
$step2_title = "Bước 2: Thêm server";
$step2_description = "Khi ở màn hình chính hãy nhấn 'Multiplayer'. Sau đó, nhấn 'Add Server'. nhập \"mctsmp.work.gd\" trong 'Server Address'. Bấm 'Done'."; // Updated IP
$step3_title = "Step 3: Tham gia và chơi!";
$step3_description = "MCT SMP đã xuất hiện trên bảng của bạn, Chọn server vừa nhập và nhấn 'Join Server' rồi chơi thôi!.\nLưu ý: Khi vào server bạn phải đăng ký bằng cách nhập '/dk matkhaucuaban' để tham gia server và khi tham gia lại thì bạn nhập '/dn matkhaucuaban'";

// --- Call to Action (CTA) Section ---
// Variables for the final call to action section
$cta_title = "Đã sẵn sàng?";
$cta_button_text = "Tham gia ngay!";

// --- SweetAlert2 Configuration ---
// Variables for SweetAlert2 pop-up messages (used for copy IP)
$swal_copied_title = "Đã sao chép!";
$swal_copied_icon = "success";
$swal_copy_failed_title = "Sao chép thất bại!";
$swal_copy_failed_text = "Hãy sao chép bằng cách bôi đen IP: ";
$swal_copy_failed_icon = "error";
$swal_confirm_button_text = "Được rồi";

// --- Footer Section ---
// Variables for the website footer
$footer_copyright = "&copy; 2025 MCT SMP. All right reserved.";
$footer_made_with = "Made with <i class='fas fa-heart text-danger'></i> by nghuyzzz.";



// Get the theme variables. Default to Halloween Theme if the selected theme is not found.
$current_theme = isset($themes[$current_theme_name]) ? $themes[$current_theme_name] : $themes['Halloween Theme'];

// Map theme variables to CSS variables for easier use in <style> block
// You can also directly use $current_theme['--variable-name'] in index.php
$primary_background = $current_theme['--primary-background'];
$secondary_background = $current_theme['--secondary-background'];
$tertiary_background = $current_theme['--tertiary-background'];
$accent_color_1 = $current_theme['--accent-color-1'];
$accent_color_2 = $current_theme['--accent-color-2'];
$text_light = $current_theme['--text-light'];
$text_dark = $current_theme['--text-dark'];
$button_shadow_color = $current_theme['--button-shadow-color'];
$button_hover_shadow_color = $current_theme['--button-hover-shadow-color'];
$navbar_shadow_color = $current_theme['--navbar-shadow-color'];
$section_shadow_color = $current_theme['--section-shadow-color'];
$cta_shadow_color = $current_theme['--cta-shadow-color'];
$cta_hover_shadow_color = $current_theme['--cta-hover-shadow-color'];
$back_to_top_shadow_color = $current_theme['--back-to-top-shadow-color'];
$card_background = $current_theme['--card-background'];
$card_text_color = $current_theme['--card-text-color'];
$card_accent_color = $current_theme['--card-accent-color'];
$hr_color = $current_theme['--hr-color'];
$swal_popup_bg = $current_theme['--swal-popup-bg'];
$swal_border_color = $current_theme['--swal-border-color'];
$swal_title_color = $current_theme['--swal-title-color'];
$swal_text_color = $current_theme['--swal-text-color'];
$swal_button_bg = $current_theme['--swal-button-bg'];
$swal_button_hover_bg = $current_theme['--swal-button-hover-bg'];

// Particles.js specific colors (not CSS variables, directly used in JS)
$particle_color = $current_theme['particle-color'];
$particle_line_color = $current_theme['particle-line-color'];

?>
