<?php

namespace Sunaoka\Aws\Structures\XRay\GetIndexingRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProbabilisticRuleValue|null $Probabilistic
 */
class IndexingRuleValue extends Shape
{
    /**
     * @param array{Probabilistic?: ProbabilisticRuleValue|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
