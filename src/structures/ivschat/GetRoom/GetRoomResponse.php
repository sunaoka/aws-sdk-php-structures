<?php

namespace Sunaoka\Aws\Structures\ivschat\GetRoom;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property string|null $name
 * @property \Aws\Api\DateTimeResult|null $createTime
 * @property \Aws\Api\DateTimeResult|null $updateTime
 * @property int<1, 100>|null $maximumMessageRatePerSecond
 * @property int<1, 500>|null $maximumMessageLength
 * @property Shapes\MessageReviewHandler|null $messageReviewHandler
 * @property array<string, string>|null $tags
 * @property list<string>|null $loggingConfigurationIdentifiers
 */
class GetRoomResponse extends Response
{
}
