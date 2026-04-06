<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $tagMap
 * @property LifecyclePolicyDetailExclusionRulesAmis|null $amis
 */
class LifecyclePolicyDetailExclusionRules extends Shape
{
    /**
     * @param array{
     *     tagMap?: array<string, string>|null,
     *     amis?: LifecyclePolicyDetailExclusionRulesAmis|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
