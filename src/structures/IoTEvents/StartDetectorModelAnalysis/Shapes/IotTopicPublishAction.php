<?php

namespace Sunaoka\Aws\Structures\IoTEvents\StartDetectorModelAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $mqttTopic
 * @property Payload|null $payload
 */
class IotTopicPublishAction extends Shape
{
    /**
     * @param array{
     *     mqttTopic: string,
     *     payload?: Payload|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
