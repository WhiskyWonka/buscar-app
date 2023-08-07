module.exports = {
  '**/*.php': ['vendor/bin/php-cs-fixer fix --config=/var/www/html/.php-cs-fixer.dist.php --allow-risky=yes'],
};