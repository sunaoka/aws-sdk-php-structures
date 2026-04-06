<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCESS'|'FAILED'|'ACTIVE'|'INACTIVE'|null $agentStatus
 * @property 'HEALTHY'|'UNHEALTHY'|null $auditResults
 * @property ConnectionDetails $egressAddress
 * @property RangedConnectionDetails $ingressAddress
 * @property string $name
 */
class AwsGroundStationAgentEndpoint extends Shape
{
    /**
     * @param array{
     *     agentStatus?: 'SUCCESS'|'FAILED'|'ACTIVE'|'INACTIVE'|null,
     *     auditResults?: 'HEALTHY'|'UNHEALTHY'|null,
     *     egressAddress: ConnectionDetails,
     *     ingressAddress: RangedConnectionDetails,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
