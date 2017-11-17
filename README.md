# Projectz3 - Tutorial Zend3

My Repository for Zend 3 studies

Following the Tutorial from ZendFramework documentation

https://docs.zendframework.com/tutorials/

# Patterns used by ZENDFramework 3 that should be studied for a better understanding of the Framework:

- Design Patterns
- MVC
- Abstract Factory
- Factory
- Dependency injections
- Anonymised functions
- Autoload
- Hydrators
- Reflection

# Zend3 Tutorial topcis made until now 

- Getting Started with Zend Framework MVC Applications

- Getting started: A skeleton application
- - Composer

- Modules
- - Album
- - Autoloading
- - Configuration
- - Informing the application about our new module

- Routing and controllers

- Database and models
- - Changed from sqlite to MySQL
- - The model files
- - Using ServiceManager to configure the table gateway and inject into the AlbumTable
- - Factories
- - Listing albums

- Forms and actions
- - Add
- - Edt
- - Del

- Unit Testing a zend-mvc application
- - Installing zend-test
- - Setting up the tests directory
- - Bootstrapping your tests
- - Configuring the service manager for the tests
- - Testing actions with POST
- - Testing model entities
- - Testing model tables

- Using zend-navigation in your Album Module
- - Setting Up zend-navigation (via composer)
- - Configuring our Site Map
- - Adding the Menu View Helper
- - Adding Breadcrumbs (module/Application/view/partial/breadcrumb)

- Using zend-paginator in your Album Module
- - Install zend-paginator (via composer)
- - Modifying the AlbumController/AlbumTable/View
- - Creating the Pagination Control Partial (module/Application/view/partial/paginator)
- - Using the PaginationControl View Helper

- Introducing the Blog Module
- - Writing a new Module
- - Informing the application about our new module ($ composer dump-autoload)
- - Configuring the Module

- Models and the ServiceManager
- - Writing the PostRepository
- - Create an entity
- - Bringing Life into our PostRepository
- - Bringing the Service into the Controller
- - Writing a Factory Class
- - Registering Services
- - Using the repository in our controller
- - Accessing View Variables

- Preparing for Different Databases
- - What is database abstraction?
- - Adding command abstraction
- - CRUD Interface

- SQL Abstraction and Object Hydration
- - Preparing the Database
- - Quick Facts Zend\Db\Sql
- - Writing the repository implementation
- - Refactoring hidden dependencies
- - Finishing the repository
