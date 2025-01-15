<?php

namespace Sunaoka\Aws\Structures\XRay\GetIndexingRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $DesiredSamplingPercentage
 * @property double|null $ActualSamplingPercentage
 */
class ProbabilisticRuleValue extends Shape
{
    /**
     * @param array{
     *     DesiredSamplingPercentage: double,
     *     ActualSamplingPercentage?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
