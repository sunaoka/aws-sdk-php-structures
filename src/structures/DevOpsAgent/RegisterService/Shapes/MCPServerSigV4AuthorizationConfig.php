<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $region
 * @property string $service
 * @property string|null $roleArn
 * @property string|null $mcpRoleArn
 * @property array<string, string>|null $customHeaders
 */
class MCPServerSigV4AuthorizationConfig extends Shape
{
    /**
     * @param array{
     *     region: string,
     *     service: string,
     *     roleArn?: string|null,
     *     mcpRoleArn?: string|null,
     *     customHeaders?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
