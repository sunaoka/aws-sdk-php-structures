<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $schedule
 */
class LineageSyncSchedule extends Shape
{
    /**
     * @param array{schedule?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
