<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LifecyclePolicyDetailAction $action
 * @property LifecyclePolicyDetailFilter $filter
 * @property LifecyclePolicyDetailExclusionRules|null $exclusionRules
 */
class LifecyclePolicyDetail extends Shape
{
    /**
     * @param array{
     *     action: LifecyclePolicyDetailAction,
     *     filter: LifecyclePolicyDetailFilter,
     *     exclusionRules?: LifecyclePolicyDetailExclusionRules|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
