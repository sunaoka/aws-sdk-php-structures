<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateDataflowEndpointGroupV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UplinkAwsGroundStationAgentEndpoint|null $uplinkAwsGroundStationAgentEndpoint
 * @property DownlinkAwsGroundStationAgentEndpoint|null $downlinkAwsGroundStationAgentEndpoint
 */
class CreateEndpointDetails extends Shape
{
    /**
     * @param array{
     *     uplinkAwsGroundStationAgentEndpoint?: UplinkAwsGroundStationAgentEndpoint|null,
     *     downlinkAwsGroundStationAgentEndpoint?: DownlinkAwsGroundStationAgentEndpoint|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
