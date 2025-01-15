<?php

namespace Sunaoka\Aws\Structures\WAFV2\DescribeManagedRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property RuleAction|null $Action
 */
class RuleSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Action?: RuleAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
