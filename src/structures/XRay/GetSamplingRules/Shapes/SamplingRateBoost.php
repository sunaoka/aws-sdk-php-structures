<?php

namespace Sunaoka\Aws\Structures\XRay\GetSamplingRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $MaxRate
 * @property int<0, max> $CooldownWindowMinutes
 */
class SamplingRateBoost extends Shape
{
    /**
     * @param array{
     *     MaxRate: double,
     *     CooldownWindowMinutes: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
