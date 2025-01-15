<?php

namespace Sunaoka\Aws\Structures\imagebuilder\StartResourceStateUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LifecyclePolicyDetailExclusionRulesAmis|null $amis
 */
class ResourceStateUpdateExclusionRules extends Shape
{
    /**
     * @param array{amis?: LifecyclePolicyDetailExclusionRulesAmis|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
