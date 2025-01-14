# AWS SDK Structures for PHP

This is an **EXPERIMENTAL** library for converting 
[AWS SDK for PHP](https://github.com/aws/aws-sdk-php) 
parameters and results into typed classes.

## Installation

### Remove unused services and actions

This library contains a very large number of class files.

So, you can run the `Sunaoka\Aws\Structures\Task\Composer::removeUnusedServices` task and specify the services you want to keep in `composer.json`:

```jsonc
{
    "scripts": {
        "pre-autoload-dump": [
            "Sunaoka\\Aws\\Structures\\Task\\Composer::removeUnusedServices"
        ]
    },
    "extra": {
        "sunaoka/aws-sdk-php-structures": {
            "S3": [
                "GetObject"  // Keep S3 GetObject action
            ],
            "DynamoDb": []   // Keep DynamoDb all actions
        }
    }
}
```

### Install

```bash
composer require sunaoka/aws-sdk-php-structures
```

## Usage

```php
use Aws\S3\S3Client;
use Sunaoka\Aws\Structures\S3\GetObject\GetObjectRequest;
use Sunaoka\Aws\Structures\S3\GetObject\GetObjectResponse;

// The class of the request is '<Command>Request'.
$request = new GetObjectRequest([
    'Bucket' => 'bucket',
    'Key' => 'key',
]);

$client = new S3Client();
$result = $client->getObject($request->toArray());

// The class of the result is '<Command>Response'.
$response = new GetObjectResponse($result->toArray());

echo $response->Body->getContents();
```
