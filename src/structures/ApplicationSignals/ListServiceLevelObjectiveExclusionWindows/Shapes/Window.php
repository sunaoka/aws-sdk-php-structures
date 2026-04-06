<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceLevelObjectiveExclusionWindows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MINUTE'|'HOUR'|'DAY'|'MONTH' $DurationUnit
 * @property int<1, max> $Duration
 */
class Window extends Shape
{
    /**
     * @param array{
     *     DurationUnit: 'MINUTE'|'HOUR'|'DAY'|'MONTH',
     *     Duration: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
