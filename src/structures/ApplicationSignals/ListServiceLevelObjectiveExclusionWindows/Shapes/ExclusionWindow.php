<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceLevelObjectiveExclusionWindows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Window $Window
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property RecurrenceRule|null $RecurrenceRule
 * @property string|null $Reason
 */
class ExclusionWindow extends Shape
{
    /**
     * @param array{
     *     Window: Window,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     RecurrenceRule?: RecurrenceRule|null,
     *     Reason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
