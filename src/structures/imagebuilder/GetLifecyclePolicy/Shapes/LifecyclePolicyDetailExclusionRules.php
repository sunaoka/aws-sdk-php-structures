<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $tagMap
 * @property LifecyclePolicyDetailExclusionRulesAmis $amis
 */
class LifecyclePolicyDetailExclusionRules extends Shape
{
    /**
     * @param array{
     *     tagMap?: array<string, string>,
     *     amis?: LifecyclePolicyDetailExclusionRulesAmis
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
