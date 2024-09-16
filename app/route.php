<?php

$routes = [
    //Home Page
    '' => 'HomeController@index',

    //Navigating Pages for Customers
    'mens' => 'ProductController@mens',
    'womens' => 'ProductController@womens',
    'accessories' => 'ProductController@accessories',

    'product/details' => 'ProductController@details',

    // Blog routes
    'blogs' => 'BlogController@list',  // Route for blog listing page


    // Cart routes
    'cart' => 'CartController@index',          // Display the cart
    'cart/addToCart' => 'CartController@addToCart', // Add item to cart
    'cart/updateQuantity' => 'CartController@updateQuantity', // Update item quantity
    'cart/removeItem' => 'CartController@removeItem', // Remove item from cart

    'login' => 'LoginController@index',
    'login/login' => 'LoginController@login',
    'logout' => 'LoginController@logout',


    // // Product routes
    // 'products/mens' => 'ProductController@mens',      // Men's products page
    // 'products/womens' => 'ProductController@womens',  // Women's products page
    // 'products/accessories' => 'ProductController@accessories',  // Accessories products page

    // Admin product management routes
    'admin/dashboard' => 'AdminController@dashboard',

    'admin/products' => 'AdminController@products',      // General product management
    'admin/mens' => 'AdminController@mens',              // Men's product management
    'admin/womens' => 'AdminController@womens',          // Women's product management
    'admin/accessories' => 'AdminController@accessories',// Accessories product management
    'admin/addProduct' => 'AdminController@addProduct',  // Add product form
    'admin/editProduct' => 'AdminController@editProduct',// Edit product form
    
    // Blog management routes
    'admin/blogs' => 'AdminController@blogs',              // Blog management page
    'admin/addOrEditBlog' => 'AdminController@addOrEditBlog', // Add or Edit blog form
    'admin/deleteBlog' => 'AdminController@deleteBlog', 

    //User management routes
    'admin/users' => 'UserController@users',         // Manage users page
    'admin/addUser' => 'UserController@addUser',   // Add user form submission
    'admin/editUser' => 'UserController@editUser',   // Edit user form submission
    'admin/deleteUser' => 'UserController@deleteUser', // Delete user action

    // Inquiry management routes
    'admin/inquiries' => 'InquiryController@inquiries',         // Inquiry management page
    'admin/addInquiry' => 'InquiryController@addInquiry',       // Add new inquiry
    'admin/editInquiry' => 'InquiryController@editInquiry',     // Edit inquiry details
    'admin/deleteInquiry' => 'InquiryController@deleteInquiry', // Delete inquiry
    'admin/updateStatus' => 'InquiryController@updateStatus',   // Update inquiry status


];
