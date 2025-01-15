<?php

namespace Sunaoka\Aws\Structures\ivschat\ListRooms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property string|null $name
 * @property MessageReviewHandler|null $messageReviewHandler
 * @property \Aws\Api\DateTimeResult|null $createTime
 * @property \Aws\Api\DateTimeResult|null $updateTime
 * @property array<string, string>|null $tags
 * @property list<string>|null $loggingConfigurationIdentifiers
 */
class RoomSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     id?: string|null,
     *     name?: string|null,
     *     messageReviewHandler?: MessageReviewHandler|null,
     *     createTime?: \Aws\Api\DateTimeResult|null,
     *     updateTime?: \Aws\Api\DateTimeResult|null,
     *     tags?: array<string, string>|null,
     *     loggingConfigurationIdentifiers?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
