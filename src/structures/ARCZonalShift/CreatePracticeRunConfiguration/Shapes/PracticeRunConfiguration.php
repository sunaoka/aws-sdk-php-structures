<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\CreatePracticeRunConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ControlCondition>|null $blockingAlarms
 * @property list<ControlCondition> $outcomeAlarms
 * @property list<string>|null $blockedWindows
 * @property list<string>|null $blockedDates
 */
class PracticeRunConfiguration extends Shape
{
    /**
     * @param array{
     *     blockingAlarms?: list<ControlCondition>|null,
     *     outcomeAlarms: list<ControlCondition>,
     *     blockedWindows?: list<string>|null,
     *     blockedDates?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
