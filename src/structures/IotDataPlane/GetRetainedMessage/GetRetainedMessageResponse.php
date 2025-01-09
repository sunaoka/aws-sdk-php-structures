<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\GetRetainedMessage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $topic
 * @property string $payload
 * @property int $qos
 * @property int $lastModifiedTime
 * @property string $userProperties
 */
class GetRetainedMessageResponse extends Response
{
}
