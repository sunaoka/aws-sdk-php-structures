<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DurationMillis
 * @property int|null $ScheduledStartTimeMillis
 */
class UpdateProgramTransition extends Shape
{
    /**
     * @param array{
     *     DurationMillis?: int|null,
     *     ScheduledStartTimeMillis?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
