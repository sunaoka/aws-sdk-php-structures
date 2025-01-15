<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isPublic
 * @property list<string>|null $regions
 * @property list<string>|null $sharedAccounts
 * @property LifecyclePolicyDetailExclusionRulesAmisLastLaunched|null $lastLaunched
 * @property array<string, string>|null $tagMap
 */
class LifecyclePolicyDetailExclusionRulesAmis extends Shape
{
    /**
     * @param array{
     *     isPublic?: bool|null,
     *     regions?: list<string>|null,
     *     sharedAccounts?: list<string>|null,
     *     lastLaunched?: LifecyclePolicyDetailExclusionRulesAmisLastLaunched|null,
     *     tagMap?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
