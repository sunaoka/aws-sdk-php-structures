<?php

namespace Sunaoka\Aws\Structures\XRay\GetSamplingTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $BoostRate
 * @property \Aws\Api\DateTimeResult $BoostRateTTL
 */
class SamplingBoost extends Shape
{
    /**
     * @param array{
     *     BoostRate: double,
     *     BoostRateTTL: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
