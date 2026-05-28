<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\SendDirectMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientId
 * @property string $topic
 * @property string|null $contentType
 * @property string|null $responseTopic
 * @property bool|null $confirmation
 * @property int|null $timeout
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $payload
 * @property string|null $userProperties
 * @property 'UNSPECIFIED_BYTES'|'UTF8_DATA'|null $payloadFormatIndicator
 * @property string|null $correlationData
 */
class SendDirectMessageRequest extends Request
{
    /**
     * @param array{
     *     clientId: string,
     *     topic: string,
     *     contentType?: string|null,
     *     responseTopic?: string|null,
     *     confirmation?: bool|null,
     *     timeout?: int|null,
     *     payload?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     userProperties?: string|null,
     *     payloadFormatIndicator?: 'UNSPECIFIED_BYTES'|'UTF8_DATA'|null,
     *     correlationData?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
