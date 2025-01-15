<?php

namespace Sunaoka\Aws\Structures\Chime\ListRooms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoomId
 * @property string|null $Name
 * @property string|null $AccountId
 * @property string|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 */
class Room extends Shape
{
    /**
     * @param array{
     *     RoomId?: string|null,
     *     Name?: string|null,
     *     AccountId?: string|null,
     *     CreatedBy?: string|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
