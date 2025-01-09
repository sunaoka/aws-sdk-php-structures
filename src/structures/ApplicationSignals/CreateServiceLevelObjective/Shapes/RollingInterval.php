<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\CreateServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MINUTE'|'HOUR'|'DAY'|'MONTH' $DurationUnit
 * @property int $Duration
 */
class RollingInterval extends Shape
{
    /**
     * @param array{
     *     DurationUnit: 'MINUTE'|'HOUR'|'DAY'|'MONTH',
     *     Duration: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
