<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateDataflowEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCESS'|'FAILED'|'ACTIVE'|'INACTIVE' $agentStatus
 * @property 'HEALTHY'|'UNHEALTHY' $auditResults
 * @property ConnectionDetails $egressAddress
 * @property RangedConnectionDetails $ingressAddress
 * @property string $name
 */
class AwsGroundStationAgentEndpoint extends Shape
{
    /**
     * @param array{
     *     agentStatus?: 'SUCCESS'|'FAILED'|'ACTIVE'|'INACTIVE',
     *     auditResults?: 'HEALTHY'|'UNHEALTHY',
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
