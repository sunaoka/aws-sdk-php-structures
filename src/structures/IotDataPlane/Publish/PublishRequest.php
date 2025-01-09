<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\Publish;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $topic
 * @property int<0, 1> $qos
 * @property bool $retain
 * @property string $payload
 * @property string $userProperties
 * @property 'UNSPECIFIED_BYTES'|'UTF8_DATA' $payloadFormatIndicator
 * @property string $contentType
 * @property string $responseTopic
 * @property string $correlationData
 * @property int $messageExpiry
 */
class PublishRequest extends Request
{
    /**
     * @param array{
     *     topic: string,
     *     qos?: int<0, 1>,
     *     retain?: bool,
     *     payload?: string,
     *     userProperties?: string,
     *     payloadFormatIndicator?: 'UNSPECIFIED_BYTES'|'UTF8_DATA',
     *     contentType?: string,
     *     responseTopic?: string,
     *     correlationData?: string,
     *     messageExpiry?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
