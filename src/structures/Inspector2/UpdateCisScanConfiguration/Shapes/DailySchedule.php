<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateCisScanConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Time $startTime
 */
class DailySchedule extends Shape
{
    /**
     * @param array{startTime: Time} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
