<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClipRange $ClipRange
 * @property UpdateProgramTransition $Transition
 */
class UpdateProgramScheduleConfiguration extends Shape
{
    /**
     * @param array{
     *     ClipRange?: ClipRange,
     *     Transition?: UpdateProgramTransition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
