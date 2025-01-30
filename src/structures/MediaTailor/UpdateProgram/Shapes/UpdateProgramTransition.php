<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ScheduledStartTimeMillis
 * @property int|null $DurationMillis
 */
class UpdateProgramTransition extends Shape
{
    /**
     * @param array{
     *     ScheduledStartTimeMillis?: int|null,
     *     DurationMillis?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
