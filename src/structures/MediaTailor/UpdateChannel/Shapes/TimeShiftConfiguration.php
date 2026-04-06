<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxTimeDelaySeconds
 */
class TimeShiftConfiguration extends Shape
{
    /**
     * @param array{MaxTimeDelaySeconds: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
