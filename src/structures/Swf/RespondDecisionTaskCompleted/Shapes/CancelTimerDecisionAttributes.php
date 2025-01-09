<?php

namespace Sunaoka\Aws\Structures\Swf\RespondDecisionTaskCompleted\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $timerId
 */
class CancelTimerDecisionAttributes extends Shape
{
    /**
     * @param array{timerId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
