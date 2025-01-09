<?php

namespace Sunaoka\Aws\Structures\XRay\UpdateIndexingRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $DesiredSamplingPercentage
 */
class ProbabilisticRuleValueUpdate extends Shape
{
    /**
     * @param array{DesiredSamplingPercentage: double} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
