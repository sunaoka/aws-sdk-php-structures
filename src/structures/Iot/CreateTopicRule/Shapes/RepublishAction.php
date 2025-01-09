<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property string $topic
 * @property int<0, 1> $qos
 * @property MqttHeaders $headers
 */
class RepublishAction extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     topic: string,
     *     qos?: int<0, 1>,
     *     headers?: MqttHeaders
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
