<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $endpoint
 * @property string|null $description
 * @property RemoteAgentAuthorizationConfig $authorizationConfig
 */
class RemoteAgentServiceDetails extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     endpoint: string,
     *     description?: string|null,
     *     authorizationConfig: RemoteAgentAuthorizationConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
