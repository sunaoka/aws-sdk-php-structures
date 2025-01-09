<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $payloadFormatIndicator
 * @property string $contentType
 * @property string $responseTopic
 * @property string $correlationData
 * @property string $messageExpiry
 * @property list<UserProperty> $userProperties
 */
class MqttHeaders extends Shape
{
    /**
     * @param array{
     *     payloadFormatIndicator?: string,
     *     contentType?: string,
     *     responseTopic?: string,
     *     correlationData?: string,
     *     messageExpiry?: string,
     *     userProperties?: list<UserProperty>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
