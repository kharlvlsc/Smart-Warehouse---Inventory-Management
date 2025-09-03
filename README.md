# Smart Warehouse — Inventory Management

> A smart warehouse inventory management system integrating a web app and machine learning.

## 🆙 Key Features

* Backend API for managing warehouses, inventory, orders (e.g., using PHP + Blade templates)
* Frontend web interface (e.g., React or Blade-based views in `frontend/src/pages`)
* Machine learning service (`ml_service`) for predictive tasks like demand forecasting, stock optimization
* Dataset handling (`datasets` — currently misspelled `datastets`) for ML inputs and training

## Getting Started

### 1. Prerequisites

* PHP 7.4+ (or applicable version)
* Composer
* Node.js & npm/yarn
* Python 3.8+ (for ML)
* Libraries such as pandas, scikit-learn (install via `pip install -r ml_service/requirements.txt`)

### 2. Backend Setup

```bash
cd backend
composer install
# Set up your database/config file (e.g. .env)
# Create tables if migrations exist:
# php artisan migrate
```

### 3. Frontend Setup

```bash
cd frontend
npm install
npm run dev     # or npm run build
```

### 4. ML Service Setup

```bash
cd ml_service
pip install -r requirements.txt
# Launch service:
python app.py   # or similar command
```

### 5. Running the System

* Start backend server:

  ```bash
  php artisan serve --port=8000
  ```
* Start frontend:

  ```bash
  npm start
  ```
* Start ML service:

  ```bash
  python app.py
  ```

### 6. Usage

1. Access the web app (e.g., at `http://localhost:8000`)
2. Log in or register (if available)
3. Manage inventory:

   * View/add/update/delete items, warehouses, stock levels, orders
4. View predictive insights:

   * Navigate to dashboard to view demand forecasts or relate analytics powered by ML

## Project Structure

```
Smart-Warehouse---Inventory-Management/
├── backend/         Backend API + server code (PHP + Blade)
├── frontend/        Frontend UI (Node.js / React / Blade views)
│   └── src/pages/   Page components or views
├── ml_service/      Python-based ML service for predictions
├── datasets/        CSV or JSON datasets for training/testing ML models
└── .gitattributes   Git attributes configuration
```

## Contributing

Contributions welcome! Please:

* Fork the repo
* Create a branch (`feature/your-feature`)
* Commit changes with good messages
* Open a Pull Request (PR) for review

