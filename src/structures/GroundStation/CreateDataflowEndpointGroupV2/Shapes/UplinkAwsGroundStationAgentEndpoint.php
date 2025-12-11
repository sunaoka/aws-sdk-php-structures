<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateDataflowEndpointGroupV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property UplinkDataflowDetails $dataflowDetails
 */
class UplinkAwsGroundStationAgentEndpoint extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     dataflowDetails: UplinkDataflowDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
