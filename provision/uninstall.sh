# BoltStarter Uninstallation Script

echo "Starting BoltStarter uninstallation..."

# Check if the script is run as root
if [ "$(id -u)" -ne 0 ]; then
    echo "This script must be run as root. Please use sudo."
    exit 1
fi

# Remove BoltStarter directory
#if [ -d "/usr/local/bolt/apps/bolt-starter" ]; then
#    rm -rf /usr/local/bolt/apps/bolt-starter
#    echo "BoltStarter directory removed."
#else
#    echo "BoltStarter directory not found."
#fi

rm -rf /usr/local/bolt/apps/bolt-starter/app/laravel/vendor
rm -rf /usr/local/bolt/apps/bolt-starter/app/laravel/composer.lock
rm -rf /usr/local/bolt/apps/bolt-starter/app/laravel/database/database.sqlite