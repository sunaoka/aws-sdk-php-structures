<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Transition $Transition
 * @property ClipRange|null $ClipRange
 */
class ScheduleConfiguration extends Shape
{
    /**
     * @param array{
     *     Transition: Transition,
     *     ClipRange?: ClipRange|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
