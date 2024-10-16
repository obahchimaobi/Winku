<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a>


</p>

<h4 align="center">📱 Contact & 👨 Social</h4>
<p align="center">
<!-- <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a> -->
<a href="mailto:anthonyobah37@gmail.com"><img src="https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white"></a>
<a href="https://github.com/obahchimaobi"><img src="https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white"></a>
<a href="https://linkedin.com/in/obahchimaobi"><img src="https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white"></a>
</p>

<h4 align="center">🚀 Skills</h4>
<p align="center">
<a href=""><img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white"></a>
<a href=""><img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white"></a>
<a href=""><img src="https://img.shields.io/badge/Sass-CC6699?style=for-the-badge&logo=sass&logoColor=white"></a>
<a href=""><img src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white"></a>
<a href=""><img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"></a>
<a href=""><img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white"></a>
<a href=""><img src="https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white"></a>
</p>

<h4 align="center">💻 OS</h4>
<p align="center">
<a href=""><img src="https://img.shields.io/badge/Fedora-294172?style=for-the-badge&logo=fedora&logoColor=white"></a>
<a href=""><img src="https://img.shields.io/badge/Kali_Linux-557C94?style=for-the-badge&logo=kali-linux&logoColor=white"></a>
</p>

---

# 🌍 Winku - Social Networking Platform

<img src="public/winku1.png">
<img src="public/winku2.png">

Winku is a feature-rich social networking platform designed to bring people together, share moments, and build communities. With an intuitive interface, users can connect, communicate, and engage with one another in real-time.

## Features

- **User Profiles**: Create and customize personal profiles with profile pictures, bios, and more.
- **News Feed**: View posts, updates, and stories from friends and followers.
- **Friendships**: Send and receive friend requests, manage friends, and follow users.
- **Messaging**: Real-time private messaging and group chats to keep conversations going.
- **Post Sharing**: Share text updates, photos, and videos with friends and the community.
- **Likes and Comments**: Engage with posts by liking and leaving comments.
- **Notifications**: Stay updated with alerts for friend requests, messages, and interactions on your posts.
- **Privacy Settings**: Control who can see your posts and profile details with flexible privacy options.
- **Search**: Find users, posts, and groups with a powerful search engine.
- **Groups and Communities**: Join or create groups around shared interests, enabling more focused interaction.

## Installation

Follow these steps to install Winku on your local machine:

1. Clone the repository:
    ```bash
    git clone https://github.com/obahchimaobi/winku.git
    cd winku
    ```

2. Install dependencies:
    ```bash
    composer install
    npm install
    ```

3. Set up environment variables:
    ```bash
    cp .env.example .env
    ```

    Update the `.env` file with your database and mail configuration.

4. Generate application key:
    ```bash
    php artisan key:generate
    ```

5. Run migrations:
    ```bash
    php artisan migrate
    ```

6. Seed the database (optional):
    ```bash
    php artisan db:seed
    ```

7. Serve the application:
    ```bash
    php artisan serve
    ```

Access Winku at `http://127.0.0.1:8000` in your browser.

## Technologies Used

- **Backend**: Laravel (PHP)
- **Frontend**: Blade Templates, Bootstrap, and Vue.js
- **Database**: MySQL
- **Real-time Communication**: Pusher / Laravel WebSockets
- **Storage**: AWS S3 / Local Storage
- **Task Scheduling**: Laravel Queues and Scheduler

## License

Winku is open-sourced software licensed under the [MIT license](LICENSE).

## Contact

For questions or support, reach out at support@winku.com.

---

Feel free to adjust the links and specific technologies as per your implementation!
