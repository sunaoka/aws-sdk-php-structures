<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClipRange|null $ClipRange
 * @property Transition $Transition
 */
class ScheduleConfiguration extends Shape
{
    /**
     * @param array{
     *     ClipRange?: ClipRange|null,
     *     Transition: Transition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
