<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\GetManagedResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $blockedDates
 * @property list<string> $blockedWindows
 * @property list<ControlCondition> $blockingAlarms
 * @property list<ControlCondition> $outcomeAlarms
 */
class PracticeRunConfiguration extends Shape
{
    /**
     * @param array{
     *     blockedDates?: list<string>,
     *     blockedWindows?: list<string>,
     *     blockingAlarms?: list<ControlCondition>,
     *     outcomeAlarms: list<ControlCondition>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
