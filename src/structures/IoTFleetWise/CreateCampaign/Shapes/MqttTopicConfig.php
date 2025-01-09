<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $mqttTopicArn
 * @property string $executionRoleArn
 */
class MqttTopicConfig extends Shape
{
    /**
     * @param array{
     *     mqttTopicArn: string,
     *     executionRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
