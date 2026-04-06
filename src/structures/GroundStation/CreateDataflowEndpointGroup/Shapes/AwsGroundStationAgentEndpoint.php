<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateDataflowEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property ConnectionDetails $egressAddress
 * @property RangedConnectionDetails $ingressAddress
 * @property 'SUCCESS'|'FAILED'|'ACTIVE'|'INACTIVE'|null $agentStatus
 * @property 'HEALTHY'|'UNHEALTHY'|null $auditResults
 */
class AwsGroundStationAgentEndpoint extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     egressAddress: ConnectionDetails,
     *     ingressAddress: RangedConnectionDetails,
     *     agentStatus?: 'SUCCESS'|'FAILED'|'ACTIVE'|'INACTIVE'|null,
     *     auditResults?: 'HEALTHY'|'UNHEALTHY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
