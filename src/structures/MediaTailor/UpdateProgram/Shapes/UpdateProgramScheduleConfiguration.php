<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateProgramTransition|null $Transition
 * @property ClipRange|null $ClipRange
 */
class UpdateProgramScheduleConfiguration extends Shape
{
    /**
     * @param array{
     *     Transition?: UpdateProgramTransition|null,
     *     ClipRange?: ClipRange|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
