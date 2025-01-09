<?php

namespace Sunaoka\Aws\Structures\Iot\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $baseRatePerMinute
 * @property double $incrementFactor
 * @property RateIncreaseCriteria $rateIncreaseCriteria
 */
class ExponentialRolloutRate extends Shape
{
    /**
     * @param array{
     *     baseRatePerMinute: int,
     *     incrementFactor: double,
     *     rateIncreaseCriteria: RateIncreaseCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
