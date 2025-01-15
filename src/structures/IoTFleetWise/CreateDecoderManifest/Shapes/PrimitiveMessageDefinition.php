<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateDecoderManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ROS2PrimitiveMessageDefinition|null $ros2PrimitiveMessageDefinition
 */
class PrimitiveMessageDefinition extends Shape
{
    /**
     * @param array{ros2PrimitiveMessageDefinition?: ROS2PrimitiveMessageDefinition|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
