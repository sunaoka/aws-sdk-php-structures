<?php

namespace Sunaoka\Aws\Structures\imagebuilder\StartResourceStateUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $isPublic
 * @property list<string> $regions
 * @property list<string> $sharedAccounts
 * @property LifecyclePolicyDetailExclusionRulesAmisLastLaunched $lastLaunched
 * @property array<string, string> $tagMap
 */
class LifecyclePolicyDetailExclusionRulesAmis extends Shape
{
    /**
     * @param array{
     *     isPublic?: bool,
     *     regions?: list<string>,
     *     sharedAccounts?: list<string>,
     *     lastLaunched?: LifecyclePolicyDetailExclusionRulesAmisLastLaunched,
     *     tagMap?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
