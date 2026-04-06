<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateDecoderManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'ROS_2' $protocolName
 */
class VehicleMiddleware extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     protocolName: 'ROS_2'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
