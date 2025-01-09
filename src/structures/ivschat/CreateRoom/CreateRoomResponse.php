<?php

namespace Sunaoka\Aws\Structures\ivschat\CreateRoom;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property string $name
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property int $maximumMessageRatePerSecond
 * @property int $maximumMessageLength
 * @property Shapes\MessageReviewHandler $messageReviewHandler
 * @property array<string, string> $tags
 * @property list<string> $loggingConfigurationIdentifiers
 */
class CreateRoomResponse extends Response
{
}
