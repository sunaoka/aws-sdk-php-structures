<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DurationMillis
 * @property int $ScheduledStartTimeMillis
 */
class UpdateProgramTransition extends Shape
{
    /**
     * @param array{
     *     DurationMillis?: int,
     *     ScheduledStartTimeMillis?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
