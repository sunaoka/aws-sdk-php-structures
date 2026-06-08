<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $endpoint
 * @property string|null $description
 * @property string $region
 * @property string $service
 * @property string $roleArn
 * @property string|null $mcpRoleArn
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
     *     mcpRoleArn?: string|null,
     *     customHeaders?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
