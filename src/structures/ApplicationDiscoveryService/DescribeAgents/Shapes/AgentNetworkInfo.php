<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ipAddress
 * @property string $macAddress
 */
class AgentNetworkInfo extends Shape
{
    /**
     * @param array{
     *     ipAddress?: string,
     *     macAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
