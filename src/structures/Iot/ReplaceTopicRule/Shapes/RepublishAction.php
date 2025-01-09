<?php

namespace Sunaoka\Aws\Structures\Iot\ReplaceTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property string $topic
 * @property int $qos
 * @property MqttHeaders $headers
 */
class RepublishAction extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     topic: string,
     *     qos?: int,
     *     headers?: MqttHeaders
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
