<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutMetricAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 2880> $WarmUpPeriodDurationInMinutes
 * @property bool|null $OnlyStartEvaluatingAfterWarmUpPeriodEnds
 */
class WarmUpConfiguration extends Shape
{
    /**
     * @param array{
     *     WarmUpPeriodDurationInMinutes: int<1, 2880>,
     *     OnlyStartEvaluatingAfterWarmUpPeriodEnds?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
