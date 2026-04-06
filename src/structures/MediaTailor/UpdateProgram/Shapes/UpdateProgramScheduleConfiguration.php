<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClipRange|null $ClipRange
 * @property UpdateProgramTransition|null $Transition
 */
class UpdateProgramScheduleConfiguration extends Shape
{
    /**
     * @param array{
     *     ClipRange?: ClipRange|null,
     *     Transition?: UpdateProgramTransition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
