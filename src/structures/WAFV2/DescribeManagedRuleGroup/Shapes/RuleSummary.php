<?php

namespace Sunaoka\Aws\Structures\WAFV2\DescribeManagedRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property RuleAction $Action
 */
class RuleSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Action?: RuleAction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
