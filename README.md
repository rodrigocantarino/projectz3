# Projectz3 - Tutorial Zend3

My Repository for Zend Framework 3 studies

Following the [Tutorial from ZendFramework documentation](https://docs.zendframework.com/tutorials/)

# Patterns used by ZEND Framework 3 that should be studied for a better understanding of the Framework:

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

- [Getting Started with Zend Framework MVC Applications] (https://docs.zendframework.com/tutorials/getting-started/overview/)

- [Getting started: A skeleton application](https://docs.zendframework.com/tutorials/getting-started/skeleton-application/)
- - Composer

- [Modules](https://docs.zendframework.com/tutorials/getting-started/modules/)
- - Album
- - Autoloading
- - Configuration
- - Informing the application about our new module

- [Routing and controllers](https://docs.zendframework.com/tutorials/getting-started/routing-and-controllers/)

- [Database and models](https://docs.zendframework.com/tutorials/getting-started/database-and-models/)
- - Changed from sqlite to MySQL
- - The model files
- - Using ServiceManager to configure the table gateway and inject into the AlbumTable
- - Factories
- - Listing albums

- [Forms and actions](https://docs.zendframework.com/tutorials/getting-started/forms-and-actions/)
- - Add
- - Edt
- - Del

- [Unit Testing a zend-mvc application](https://docs.zendframework.com/tutorials/unit-testing/)
- - Installing zend-test
- - Setting up the tests directory
- - Bootstrapping your tests
- - Configuring the service manager for the tests
- - Testing actions with POST
- - Testing model entities
- - Testing model tables

- [Using zend-navigation in your Album Module](https://docs.zendframework.com/tutorials/navigation/)
- - Setting Up zend-navigation (via composer)
- - Configuring our Site Map
- - Adding the Menu View Helper
- - Adding Breadcrumbs (module/Application/view/partial/breadcrumb)

- [Using zend-paginator in your Album Module](https://docs.zendframework.com/tutorials/pagination/)
- - Install zend-paginator (via composer)
- - Modifying the AlbumController/AlbumTable/View
- - Creating the Pagination Control Partial (module/Application/view/partial/paginator)
- - Using the PaginationControl View Helper

- [Introducing the Blog Module](https://docs.zendframework.com/tutorials/in-depth-guide/first-module/)
- - Writing a new Module
- - Informing the application about our new module ($ composer dump-autoload)
- - Configuring the Module

- [Models and the ServiceManager](https://docs.zendframework.com/tutorials/in-depth-guide/models-and-servicemanager/)
- - Writing the PostRepository
- - Create an entity
- - Bringing Life into our PostRepository
- - Bringing the Service into the Controller
- - Writing a Factory Class
- - Registering Services
- - Using the repository in our controller
- - Accessing View Variables

- [Preparing for Different Databases](https://docs.zendframework.com/tutorials/in-depth-guide/preparing-databases/)
- - What is database abstraction?
- - Adding command abstraction
- - CRUD Interface

- [SQL Abstraction and Object Hydration](https://docs.zendframework.com/tutorials/in-depth-guide/zend-db-sql-zend-hydrator/)
- - Preparing the Database
- - Quick Facts Zend\Db\Sql
- - Writing the repository implementation
- - Refactoring hidden dependencies
- - Finishing the repository

- [Understanding the Router](https://docs.zendframework.com/tutorials/in-depth-guide/understanding-routing/)
- - Different route types
- - - Literal routes
- - - Segment routes
- - Different routing concepts
- - - Generic routes
- - - Basic routing
- - - Child routes
- - A practical example for our blog module


- [Making Use of Forms and Fieldsets](https://docs.zendframework.com/tutorials/in-depth-guide/zend-form-zend-form-fieldset/)
- - Form components
- - - Fieldsets
- - - Forms
- - Creating your first Fieldset
- - Creating the PostForm
- - Adding a new Post
- - - Creating the WriteController
- - - Check-in
- - Displaying the form
- - - General form-handling logic for controllers
- - - Using zend-hydrator with zend-form
