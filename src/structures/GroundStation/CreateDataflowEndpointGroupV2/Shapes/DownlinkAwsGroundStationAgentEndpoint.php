<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateDataflowEndpointGroupV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property DownlinkDataflowDetails $dataflowDetails
 */
class DownlinkAwsGroundStationAgentEndpoint extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     dataflowDetails: DownlinkDataflowDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
