<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MCPServerAuthorizationDiscoveryConfig|null $authorizationDiscovery
 */
class DatadogAuthorizationConfig extends Shape
{
    /**
     * @param array{authorizationDiscovery?: MCPServerAuthorizationDiscoveryConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
