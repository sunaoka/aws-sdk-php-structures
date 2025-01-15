<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property string $topic
 * @property int<0, 1>|null $qos
 * @property MqttHeaders|null $headers
 */
class RepublishAction extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     topic: string,
     *     qos?: int<0, 1>|null,
     *     headers?: MqttHeaders|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
