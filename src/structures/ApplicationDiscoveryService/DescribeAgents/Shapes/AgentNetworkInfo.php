<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ipAddress
 * @property string|null $macAddress
 */
class AgentNetworkInfo extends Shape
{
    /**
     * @param array{
     *     ipAddress?: string|null,
     *     macAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
