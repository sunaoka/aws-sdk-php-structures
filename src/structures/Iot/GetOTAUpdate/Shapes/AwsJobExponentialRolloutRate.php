<?php

namespace Sunaoka\Aws\Structures\Iot\GetOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $baseRatePerMinute
 * @property double $incrementFactor
 * @property AwsJobRateIncreaseCriteria $rateIncreaseCriteria
 */
class AwsJobExponentialRolloutRate extends Shape
{
    /**
     * @param array{
     *     baseRatePerMinute: int,
     *     incrementFactor: double,
     *     rateIncreaseCriteria: AwsJobRateIncreaseCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
