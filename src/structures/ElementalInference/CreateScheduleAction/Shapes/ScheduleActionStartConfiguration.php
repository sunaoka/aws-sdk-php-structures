<?php

namespace Sunaoka\Aws\Structures\ElementalInference\CreateScheduleAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FixedModeScheduleActionStartSettings|null $fixedModeScheduleActionStartSettings
 */
class ScheduleActionStartConfiguration extends Shape
{
    /**
     * @param array{fixedModeScheduleActionStartSettings?: FixedModeScheduleActionStartSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
