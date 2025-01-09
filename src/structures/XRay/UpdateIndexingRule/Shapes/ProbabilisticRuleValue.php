<?php

namespace Sunaoka\Aws\Structures\XRay\UpdateIndexingRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $DesiredSamplingPercentage
 * @property double $ActualSamplingPercentage
 */
class ProbabilisticRuleValue extends Shape
{
    /**
     * @param array{
     *     DesiredSamplingPercentage: double,
     *     ActualSamplingPercentage?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
