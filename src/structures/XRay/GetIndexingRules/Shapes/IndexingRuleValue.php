<?php

namespace Sunaoka\Aws\Structures\XRay\GetIndexingRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProbabilisticRuleValue $Probabilistic
 */
class IndexingRuleValue extends Shape
{
    /**
     * @param array{Probabilistic?: ProbabilisticRuleValue} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
