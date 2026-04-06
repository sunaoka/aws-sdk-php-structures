<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetDataflowEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property DownlinkDataflowDetails $dataflowDetails
 * @property 'SUCCESS'|'FAILED'|'ACTIVE'|'INACTIVE'|null $agentStatus
 * @property 'HEALTHY'|'UNHEALTHY'|null $auditResults
 */
class DownlinkAwsGroundStationAgentEndpointDetails extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     dataflowDetails: DownlinkDataflowDetails,
     *     agentStatus?: 'SUCCESS'|'FAILED'|'ACTIVE'|'INACTIVE'|null,
     *     auditResults?: 'HEALTHY'|'UNHEALTHY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
