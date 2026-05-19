<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $endpoint
 * @property string|null $description
 * @property string $region
 * @property string $service
 * @property string $roleArn
 * @property array<string, string>|null $customHeaders
 */
class RegisteredMCPServerSigV4Details extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     endpoint: string,
     *     description?: string|null,
     *     region: string,
     *     service: string,
     *     roleArn: string,
     *     customHeaders?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
