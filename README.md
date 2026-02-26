# Hishab Nikash (হিসাব নিকাশ) 📊

**A complete frontend prototype for a Web-Based Accounting & Financial Management System.**

## Overview

**Hishab Nikash** is a lightweight, intuitive web application designed for personal and small business financial tracking. It allows users to manage client accounts, log daily transactions (income and expenses), categorize money streams (Bank vs. Cash), and visualize their financial health through interactive charts. Currently, the application operates purely on the client side using `localStorage`, making it incredibly fast and easy to deploy as a prototype.

## ✨ Key Features

* **Account Management:** Add, view, delete, and manage user/company accounts.
* **Transaction Tracking:** Log comprehensive transaction details including user ID, amount, date, reason, description, and source (Bank or Cash).
* **CSV Data Handling:** Bulk import and export functionality for both Accounts and Transactions via `.csv` files.
* **Interactive Dashboard:** A `Chart.js` powered visual analysis page that renders dynamic bar and line charts for Bank Income/Expenses, Cash Income/Expenses, and Net Balance.
* **Advanced Filtering:** Search transactions by user, sort by amount/date, and filter financial data by specific date ranges.
* **Smooth UI/UX:** Features a beautiful GSAP & Anime.js powered pre-loader sequence, dynamic glass-morphism login forms, and a responsive sidebar navigation.

## 🛠 Tech Stack

* **Frontend:** HTML5, CSS3, Vanilla JavaScript (ES6+)
* **Data Storage:** Browser `localStorage` (No database required for local testing)
* **Libraries & Plugins:**
* [Chart.js](https://www.chartjs.org/) - For rendering data visualizations.
* [GSAP (TweenMax)](https://www.google.com/search?q=https://greensock.com/) & [Anime.js](https://animejs.com/) - For landing page animations and pre-loaders.
* [FontAwesome](https://fontawesome.com/) - For UI iconography.


* **Backend Utility:** A small PHP script (`ip.php`) for server IP validation/admin checks.

## 📂 File Structure

* `index.html` - The animated landing page with promotional details and navigation.
* `login.html` - A sleek, animated Login/Register portal.
* `pricing.html` - Displays the subscription tiers (Monthly & Yearly).
* `account_details.html` - Form to create new accounts and import account CSVs.
* `account_list.html` - A searchable, exportable table view of all saved accounts.
* `transection_details.html` - Form to input new income/expense records.
* `transition_list.html` - The transaction ledger featuring live total calculations (Cash vs. Bank), date filtering, and CSV export.
* `visual_analysis.html` - The analytics dashboard rendering interactive financial charts.
* `ip.php` - A backend utility script for checking server IPs.


Would you like me to draft a `CONTRIBUTING.md` file as well, or help you write the backend SQL database schema to replace the `localStorage` setup?
