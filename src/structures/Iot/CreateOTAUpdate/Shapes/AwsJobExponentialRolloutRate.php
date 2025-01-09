<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1000> $baseRatePerMinute
 * @property double $incrementFactor
 * @property AwsJobRateIncreaseCriteria $rateIncreaseCriteria
 */
class AwsJobExponentialRolloutRate extends Shape
{
    /**
     * @param array{
     *     baseRatePerMinute: int<1, 1000>,
     *     incrementFactor: double,
     *     rateIncreaseCriteria: AwsJobRateIncreaseCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
