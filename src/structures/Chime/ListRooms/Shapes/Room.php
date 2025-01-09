<?php

namespace Sunaoka\Aws\Structures\Chime\ListRooms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoomId
 * @property string $Name
 * @property string $AccountId
 * @property string $CreatedBy
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 */
class Room extends Shape
{
    /**
     * @param array{
     *     RoomId?: string,
     *     Name?: string,
     *     AccountId?: string,
     *     CreatedBy?: string,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
