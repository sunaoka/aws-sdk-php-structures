<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\GetRetainedMessage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $topic
 * @property \Psr\Http\Message\StreamInterface $payload
 * @property int<0, 1> $qos
 * @property int $lastModifiedTime
 * @property \Psr\Http\Message\StreamInterface $userProperties
 */
class GetRetainedMessageResponse extends Response
{
}
