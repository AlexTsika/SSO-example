# SSO Integration Example with Laravel and Socialite

This is an example project showing how to integrate Single Sign-On (SSO) with Google and GitHub using Laravel and Socialite.

## Table of Contents

- [Project Setup](#project-setup)
- [Key Features](#key-features)
- [Production/Staging Requirements](#productionstaging-requirements)
- [Running the Application](#running-the-application)

## Project Setup

Follow these steps to get the project set up:

1. **Clone the repository**

   `git clone https://github.com/AlexTsika/SSO-example`

2. **Install dependencies**

   Navigate into the project directory and install the necessary dependencies by running `composer install`.

3. **Configure Environment Variables**

   Copy the `.env.example` file to a new file called `.env`. Fill in your database and mail server settings. Add your Google and GitHub client IDs, client secrets, and callback URLs:

    ```plaintext
    GOOGLE_CLIENT_ID=your_google_client_id
    GOOGLE_CLIENT_SECRET=your_google_client_secret
    GOOGLE_REDIRECT_URL=http://your_ngrok_subdomain.ngrok.io/login/callback

    GITHUB_CLIENT_ID=your_github_client_id
    GITHUB_CLIENT_SECRET=your_github_client_secret
    GITHUB_REDIRECT_URL=http://your_ngrok_subdomain.ngrok.io/login/github/callback
    ```

4. **Generate application key**

   Run `php artisan key:generate` to generate a new application key.

## Key Features

- **Single Sign-On (SSO) with Google and GitHub**

  Users can authenticate themselves using their Google or GitHub accounts. This is accomplished using the Laravel Socialite package.

## Production/Staging Requirements

- A server running PHP 7.3 or higher
- A database compatible with Laravel, such as MySQL or PostgreSQL
- Composer for managing PHP dependencies
- NGROK for secure tunneling during development
- Client IDs, client secrets, and callback URLs from Google and GitHub OAuth applications

## Running the Application

1. **Start NGROK**

   You can start NGROK using the following command:

    ```shell
    ngrok http 8000
    ```

   This will expose your local web server on port 8000 to the internet.

2. **Run the application**

   From the project root, run `php artisan serve`. The application should now be available at your NGROK URL and ready for testing SSO.