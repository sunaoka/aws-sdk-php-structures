<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Config $s3Config
 * @property TimestreamConfig $timestreamConfig
 * @property MqttTopicConfig $mqttTopicConfig
 */
class DataDestinationConfig extends Shape
{
    /**
     * @param array{
     *     s3Config?: S3Config,
     *     timestreamConfig?: TimestreamConfig,
     *     mqttTopicConfig?: MqttTopicConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
