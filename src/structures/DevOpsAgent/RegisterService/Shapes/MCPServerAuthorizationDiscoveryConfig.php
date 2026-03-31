<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $returnToEndpoint
 */
class MCPServerAuthorizationDiscoveryConfig extends Shape
{
    /**
     * @param array{returnToEndpoint: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
