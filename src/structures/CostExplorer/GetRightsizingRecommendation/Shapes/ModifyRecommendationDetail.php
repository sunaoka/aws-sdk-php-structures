<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TargetInstance> $TargetInstances
 */
class ModifyRecommendationDetail extends Shape
{
    /**
     * @param array{TargetInstances?: list<TargetInstance>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
