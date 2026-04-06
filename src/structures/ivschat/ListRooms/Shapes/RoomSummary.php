<?php

namespace Sunaoka\Aws\Structures\ivschat\ListRooms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createTime
 * @property string|null $id
 * @property list<string>|null $loggingConfigurationIdentifiers
 * @property MessageReviewHandler|null $messageReviewHandler
 * @property string|null $name
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult|null $updateTime
 */
class RoomSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     createTime?: \Aws\Api\DateTimeResult|null,
     *     id?: string|null,
     *     loggingConfigurationIdentifiers?: list<string>|null,
     *     messageReviewHandler?: MessageReviewHandler|null,
     *     name?: string|null,
     *     tags?: array<string, string>|null,
     *     updateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
