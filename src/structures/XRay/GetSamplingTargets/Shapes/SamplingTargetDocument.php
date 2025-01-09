<?php

namespace Sunaoka\Aws\Structures\XRay\GetSamplingTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleName
 * @property double $FixedRate
 * @property int $ReservoirQuota
 * @property \Aws\Api\DateTimeResult $ReservoirQuotaTTL
 * @property int $Interval
 */
class SamplingTargetDocument extends Shape
{
    /**
     * @param array{
     *     RuleName?: string,
     *     FixedRate?: double,
     *     ReservoirQuota?: int,
     *     ReservoirQuotaTTL?: \Aws\Api\DateTimeResult,
     *     Interval?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
