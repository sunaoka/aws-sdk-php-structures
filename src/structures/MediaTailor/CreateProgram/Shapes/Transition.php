<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DurationMillis
 * @property 'BEFORE_PROGRAM'|'AFTER_PROGRAM' $RelativePosition
 * @property string|null $RelativeProgram
 * @property int|null $ScheduledStartTimeMillis
 * @property string $Type
 */
class Transition extends Shape
{
    /**
     * @param array{
     *     DurationMillis?: int|null,
     *     RelativePosition: 'BEFORE_PROGRAM'|'AFTER_PROGRAM',
     *     RelativeProgram?: string|null,
     *     ScheduledStartTimeMillis?: int|null,
     *     Type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
