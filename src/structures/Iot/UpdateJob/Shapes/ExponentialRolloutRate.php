<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1000> $baseRatePerMinute
 * @property double $incrementFactor
 * @property RateIncreaseCriteria $rateIncreaseCriteria
 */
class ExponentialRolloutRate extends Shape
{
    /**
     * @param array{
     *     baseRatePerMinute: int<1, 1000>,
     *     incrementFactor: double,
     *     rateIncreaseCriteria: RateIncreaseCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
