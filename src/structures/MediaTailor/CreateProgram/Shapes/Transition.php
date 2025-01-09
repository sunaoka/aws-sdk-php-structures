<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DurationMillis
 * @property 'BEFORE_PROGRAM'|'AFTER_PROGRAM' $RelativePosition
 * @property string $RelativeProgram
 * @property int $ScheduledStartTimeMillis
 * @property string $Type
 */
class Transition extends Shape
{
    /**
     * @param array{
     *     DurationMillis?: int,
     *     RelativePosition: 'BEFORE_PROGRAM'|'AFTER_PROGRAM',
     *     RelativeProgram?: string,
     *     ScheduledStartTimeMillis?: int,
     *     Type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
