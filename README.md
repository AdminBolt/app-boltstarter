# **BoltStarter**

**BoltStarter** is an example module designed to help you get started with module development for the **AdminBolt** Linux shared hosting control panel. It provides a simple template and framework to build your own custom modules by demonstrating essential integration steps, configuration examples, and basic functionalities.

## Features
- **Template Module**: A foundation for creating new apps.
- **Easy Integration**: Seamlessly integrates with AdminBolt, serving as a template for more advanced features.
- **Configuration Example**: Provides a basic example of how configuration files can be set up for modules.
- **Demo-Only**: This module doesn't perform any real operations; it's purely for demonstration and educational purposes.

## Requirements
- AdminBolt Linux Control Panel
- PHP 8.2+ (for module compatibility)
- Laravel framework (as AdminBolt is Laravel-based)

## Installation

To install **BoltStarter** into your AdminBolt environment, follow these steps:

1. Clone the repository into the `apps` directory:
    ```bash
    git clone https://github.com/yourusername/BoltStarter.git /usr/local/bolt/apps/boltstarter
    ```

2. Run the installation command:
    ```bash
    bolt-cli app:install BoltStarter
    ```

3. After installation, **BoltStarter** should now appear as a app in the AdminBolt control panel.

## Configuration

**BoltStarter** comes with a sample configuration file. You can modify it according to your needs.


To update configurations, simply edit this file as per your requirements.

## Usage

Once installed, you can interact with the app using AdminBolt's command-line tools.

### Example Commands:
```bash
# Enable the app
$ bolt-cli app:enable BoltStarter

# Check the app status
$ bolt-cli app:status BoltStarter

# Disable the app
$ bolt-cli app:disable BoltStarter
```


## Directory Structure
```bash
/usr/local/bolt/apps/
├── boltstarter/                   # Module name
│   ├── bin/                       # Executables or core logic
│   ├── config/                    # Configuration files
│   ├── logs/                      # Logs (optional)
│   ├── public/                    # Public assets (icons, screenshots, etc.)
│   │   ├── icons/                 # Icons used by the module
│   │   │   ├── logo.png           # Logo icon
│   │   │   └── banner.png         # Banner or other icons
│   │   └── screenshots/           # Screenshots of the module
│   │       ├── screenshot1.png    # A screenshot of the module in use
│   │       └── screenshot2.png    # Another screenshot
│   ├── provision/                 # Provisioning tasks (install, uninstall, update, repair)
│   │   ├── install.sh             # Install script
│   │   ├── uninstall.sh           # Uninstall script
│   │   ├── update.sh              # Update script
│   │   └── repair.sh              # Repair script
│   ├── manifest.json              # Manifest metadata
│   ├── README.md                  # Documentation
│   └── LICENSE                    # License
```

## Notes
- **BoltStarter** does not perform any operational tasks but demonstrates the basic module structure and integration for **AdminBolt**.
- It's an excellent starting point for developers who want to extend the AdminBolt control panel with custom functionalities.
- This module is just a template and can be easily expanded with actual business logic and features.

## Contributing

Feel free to fork the repository and create pull requests with improvements. This is an open-source template module, and contributions are always welcome!

## License

This project is licensed under the **MIT License** - see the [LICENSE](LICENSE) file for details.
