<?php

namespace Sunaoka\Aws\Structures\XRay\GetSamplingTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuleName
 * @property double|null $FixedRate
 * @property int|null $ReservoirQuota
 * @property \Aws\Api\DateTimeResult|null $ReservoirQuotaTTL
 * @property int|null $Interval
 */
class SamplingTargetDocument extends Shape
{
    /**
     * @param array{
     *     RuleName?: string|null,
     *     FixedRate?: double|null,
     *     ReservoirQuota?: int|null,
     *     ReservoirQuotaTTL?: \Aws\Api\DateTimeResult|null,
     *     Interval?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
