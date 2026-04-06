<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\BatchUpdateExclusionWindows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Expression
 */
class RecurrenceRule extends Shape
{
    /**
     * @param array{Expression: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
