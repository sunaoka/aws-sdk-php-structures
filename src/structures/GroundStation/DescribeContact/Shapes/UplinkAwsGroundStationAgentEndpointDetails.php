<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property UplinkDataflowDetails $dataflowDetails
 * @property 'SUCCESS'|'FAILED'|'ACTIVE'|'INACTIVE'|null $agentStatus
 * @property 'HEALTHY'|'UNHEALTHY'|null $auditResults
 */
class UplinkAwsGroundStationAgentEndpointDetails extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     dataflowDetails: UplinkDataflowDetails,
     *     agentStatus?: 'SUCCESS'|'FAILED'|'ACTIVE'|'INACTIVE'|null,
     *     auditResults?: 'HEALTHY'|'UNHEALTHY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
