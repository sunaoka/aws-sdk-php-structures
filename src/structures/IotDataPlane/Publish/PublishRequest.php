<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\Publish;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $topic
 * @property int<0, 1>|null $qos
 * @property bool|null $retain
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $payload
 * @property string|null $userProperties
 * @property 'UNSPECIFIED_BYTES'|'UTF8_DATA'|null $payloadFormatIndicator
 * @property string|null $contentType
 * @property string|null $responseTopic
 * @property string|null $correlationData
 * @property int|null $messageExpiry
 */
class PublishRequest extends Request
{
    /**
     * @param array{
     *     topic: string,
     *     qos?: int<0, 1>|null,
     *     retain?: bool|null,
     *     payload?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     userProperties?: string|null,
     *     payloadFormatIndicator?: 'UNSPECIFIED_BYTES'|'UTF8_DATA'|null,
     *     contentType?: string|null,
     *     responseTopic?: string|null,
     *     correlationData?: string|null,
     *     messageExpiry?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
