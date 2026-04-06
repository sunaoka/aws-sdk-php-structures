<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\GetManagedResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $blockedDates
 * @property list<string>|null $blockedWindows
 * @property list<ControlCondition>|null $blockingAlarms
 * @property list<ControlCondition> $outcomeAlarms
 */
class PracticeRunConfiguration extends Shape
{
    /**
     * @param array{
     *     blockedDates?: list<string>|null,
     *     blockedWindows?: list<string>|null,
     *     blockingAlarms?: list<ControlCondition>|null,
     *     outcomeAlarms: list<ControlCondition>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
