<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\CreateServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DAY'|'MONTH' $DurationUnit
 * @property int<1, max> $Duration
 */
class RollingInterval extends Shape
{
    /**
     * @param array{
     *     DurationUnit: 'DAY'|'MONTH',
     *     Duration: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
