<?php

namespace Sunaoka\Aws\Structures\Chime\PutRetentionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $RetentionDays
 */
class RoomRetentionSettings extends Shape
{
    /**
     * @param array{RetentionDays?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
