<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $baseRatePerMinute
 * @property double $incrementFactor
 * @property IoTJobRateIncreaseCriteria $rateIncreaseCriteria
 */
class IoTJobExponentialRolloutRate extends Shape
{
    /**
     * @param array{
     *     baseRatePerMinute: int,
     *     incrementFactor: double,
     *     rateIncreaseCriteria: IoTJobRateIncreaseCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
