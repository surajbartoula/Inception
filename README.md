# Infrastructure Setup with Docker Compose

## Project Overview
This project involves setting up a small infrastructure composed of different services under specific rules. The entire setup is built within a **virtual machine** using **Docker Compose**. Each service runs in a dedicated container, following best practices for containerization.

## Requirements
- The project must be implemented using **Docker Compose**.
- Each **Docker image** must be named after its corresponding service.
- All services must run in **dedicated containers**.
- The containers must be based on **Alpine** or **Debian** (penultimate stable version).
- Each service must have its own **Dockerfile**.
- Dockerfiles must be referenced in the `docker-compose.yml` file via a **Makefile**.
- **Pulling pre-built Docker images (except Alpine/Debian) is prohibited.**

## Services & Components

### 1. **NGINX Container**
- Runs **NGINX** with **TLSv1.2 or TLSv1.3 only**.
- Handles incoming traffic securely.
- Acts as a reverse proxy for the WordPress service.

### 2. **WordPress Container**
- Runs **WordPress** with **php-fpm**.
- Must be installed and properly configured.
- Does **not** include NGINX.

### 3. **MariaDB Container**
- Runs **MariaDB** as the database backend.
- Stores WordPress data.
- Does **not** include NGINX.

### 4. **Volumes**
- A **database volume** to persist MariaDB data.
- A **WordPress volume** to store website files.

### 5. **Docker Network**
- A custom **Docker network** to establish communication between containers.

### 6. **Container Resilience**
- All containers must be configured to **restart automatically** in case of a crash.

## Installation & Setup

### 1. Clone the Repository
```sh
 git clone <repository-url>
 cd <repository-folder>
```

### 2. Build and Start Containers
```sh
sudo make
```

### 3. Stop and Remove Containers
```sh
sudo make fclean
```

### 4. Check Running Containers
```sh
docker ps
```

## File Structure
```
|-- docker-compose.yml
|-- Makefile
|-- nginx/
|   |-- Dockerfile
|   |-- config/
|-- wordpress/
|   |-- Dockerfile
|   |-- wp-config.php
|-- mariadb/
|   |-- Dockerfile
|   |-- init.sql
|-- volumes/
```

## Technologies Used
- **Docker** & **Docker Compose**
- **NGINX**
- **WordPress**
- **MariaDB**
- **PHP-FPM**
- **TLSv1.2 / TLSv1.3**

