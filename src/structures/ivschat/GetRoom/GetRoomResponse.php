<?php

namespace Sunaoka\Aws\Structures\ivschat\GetRoom;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createTime
 * @property string|null $id
 * @property list<string>|null $loggingConfigurationIdentifiers
 * @property int<1, 500>|null $maximumMessageLength
 * @property int<1, 100>|null $maximumMessageRatePerSecond
 * @property Shapes\MessageReviewHandler|null $messageReviewHandler
 * @property string|null $name
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult|null $updateTime
 */
class GetRoomResponse extends Response
{
}
