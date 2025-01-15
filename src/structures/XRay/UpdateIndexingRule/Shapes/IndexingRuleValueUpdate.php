<?php

namespace Sunaoka\Aws\Structures\XRay\UpdateIndexingRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProbabilisticRuleValueUpdate|null $Probabilistic
 */
class IndexingRuleValueUpdate extends Shape
{
    /**
     * @param array{Probabilistic?: ProbabilisticRuleValueUpdate|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
