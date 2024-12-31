# Simple MVC Framework

This project is a simple MVC (Model-View-Controller) framework written in PHP. It is designed for developers who want to build web applications with a clear separation of concerns. The framework provides a structured way to manage your code, making it easier to maintain and scale. It is suitable for both beginners and experienced developers looking for a lightweight and easy-to-use framework.

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/mojtabagh0098/yourproject.git
    ```
2. Navigate to the project directory:
    ```bash
    cd yourproject
    ```
3. Install dependencies:
    ```bash
    npm install
    ```

## Usage

## Usage

To use this project, follow these steps:

1. Start the development server:
    ```bash
    php -S localhost:8000 -t public
    ```

2. Open your web browser and navigate to:
    ```
    http://localhost:8000
    ```

3. You should see the default homepage of the MVC framework.

### Example

To create a new controller, follow these steps:

1. Create a new PHP file in the `controllers` directory, for example `ExampleController.php`:
    ```php
    <?php

    class ExampleController {
        public function index() {
            echo 'Hello, world!';
        }
    }
    ```

2. Define a route for your new controller in the `routes.php` file:
    ```php
    $router->addRoute('/example', 'ExampleController::class','index');
    ```

3. Navigate to `http://localhost:8000/example` in your web browser to see the output.

This is a basic example to get you started. You can create more complex controllers, models, and views as needed.

## Contributing

We invite everyone to contribute and improve this MVC framework. Your contributions are valuable and will help make this project better for the community.

1. Fork the repository.
2. Create a new branch:
    ```bash
    git checkout -b feature-branch
    ```
3. Make your changes and commit them:
    ```bash
    git commit -m 'Add some feature'
    ```
4. Push to the branch:
    ```bash
    git push origin feature-branch
    ```
5. Open a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments

- Hat tip to anyone whose code was used
- Inspiration
- etc