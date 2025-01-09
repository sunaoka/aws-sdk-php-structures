<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LifecyclePolicyDetailAction $action
 * @property LifecyclePolicyDetailFilter $filter
 * @property LifecyclePolicyDetailExclusionRules $exclusionRules
 */
class LifecyclePolicyDetail extends Shape
{
    /**
     * @param array{
     *     action: LifecyclePolicyDetailAction,
     *     filter: LifecyclePolicyDetailFilter,
     *     exclusionRules?: LifecyclePolicyDetailExclusionRules
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
