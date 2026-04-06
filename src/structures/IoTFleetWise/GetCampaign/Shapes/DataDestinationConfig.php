<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Config|null $s3Config
 * @property TimestreamConfig|null $timestreamConfig
 * @property MqttTopicConfig|null $mqttTopicConfig
 */
class DataDestinationConfig extends Shape
{
    /**
     * @param array{
     *     s3Config?: S3Config|null,
     *     timestreamConfig?: TimestreamConfig|null,
     *     mqttTopicConfig?: MqttTopicConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
