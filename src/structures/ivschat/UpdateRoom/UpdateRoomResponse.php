<?php

namespace Sunaoka\Aws\Structures\ivschat\UpdateRoom;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property string $name
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property int<1, 100> $maximumMessageRatePerSecond
 * @property int<1, 500> $maximumMessageLength
 * @property Shapes\MessageReviewHandler $messageReviewHandler
 * @property array<string, string> $tags
 * @property list<string> $loggingConfigurationIdentifiers
 */
class UpdateRoomResponse extends Response
{
}
