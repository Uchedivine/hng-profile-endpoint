# HNG Stage 0 Task - Dynamic Profile API

This is a simple RESTful API endpoint created for the HNG backend internship (Stage 0). The API returns a static user profile along with a dynamic cat fact fetched from an external service on each request.

**Live API Endpoint:** [Your Deployed API URL Here, e.g., https://my-app.railway.app/me]

---

### API Documentation

#### Get Profile Information

Returns profile information and a random cat fact.

-   **URL:** `/me`
-   **Method:** `GET`
-   **Success Response:**
    -   **Code:** 200 OK
    -   **Content Example:**
        ```json
        {
            "status": "success",
            "user": {
                "email": "uchedivine65@gmail.com.com",
                "name": "Asogwa Uchechukwu Divine",
                "stack": "PHP/Laravel"
            },
            "timestamp": "2025-10-18T05:44:38.123456Z",
            "fact": "A cat's brain is more similar to a human's brain than a dog's."
        }
        ```

---

### Project Setup and Installation

To run this project locally, follow these steps:

1.  **Clone the repository:**
    ```bash
    git clone [Your GitHub Repo URL]
    cd hng_task0
    ```

2.  **Install dependencies:**
    ```bash
    composer install
    ```

3.  **Set up environment variables:**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4.  **Add your personal information** to the `.env` file:
    ```env
    MY_NAME="Asogwa Uchechukwu Divine"
    MY_EMAIL="uchedivine65@gmail.com.com"
    MY_STACK="PHP/Laravel"
    ```

5.  **Run the application:**
    ```bash
    php artisan serve
    ```
---