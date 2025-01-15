<?php

namespace Sunaoka\Aws\Structures\Chime\GetRetentionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 5475>|null $RetentionDays
 */
class RoomRetentionSettings extends Shape
{
    /**
     * @param array{RetentionDays?: int<1, 5475>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
