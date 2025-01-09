<?php

namespace Sunaoka\Aws\Structures\ivschat\ListRooms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property string $name
 * @property MessageReviewHandler $messageReviewHandler
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property array<string, string> $tags
 * @property list<string> $loggingConfigurationIdentifiers
 */
class RoomSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     id?: string,
     *     name?: string,
     *     messageReviewHandler?: MessageReviewHandler,
     *     createTime?: \Aws\Api\DateTimeResult,
     *     updateTime?: \Aws\Api\DateTimeResult,
     *     tags?: array<string, string>,
     *     loggingConfigurationIdentifiers?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
