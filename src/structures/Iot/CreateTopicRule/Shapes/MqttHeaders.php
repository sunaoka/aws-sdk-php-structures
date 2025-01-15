<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $payloadFormatIndicator
 * @property string|null $contentType
 * @property string|null $responseTopic
 * @property string|null $correlationData
 * @property string|null $messageExpiry
 * @property list<UserProperty>|null $userProperties
 */
class MqttHeaders extends Shape
{
    /**
     * @param array{
     *     payloadFormatIndicator?: string|null,
     *     contentType?: string|null,
     *     responseTopic?: string|null,
     *     correlationData?: string|null,
     *     messageExpiry?: string|null,
     *     userProperties?: list<UserProperty>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
