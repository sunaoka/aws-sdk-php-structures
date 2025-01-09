<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $mqttTopic
 * @property Payload $payload
 */
class IotTopicPublishAction extends Shape
{
    /**
     * @param array{
     *     mqttTopic: string,
     *     payload?: Payload
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
