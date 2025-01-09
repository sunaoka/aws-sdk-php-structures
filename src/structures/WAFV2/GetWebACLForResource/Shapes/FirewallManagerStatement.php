<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACLForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ManagedRuleGroupStatement $ManagedRuleGroupStatement
 * @property RuleGroupReferenceStatement $RuleGroupReferenceStatement
 */
class FirewallManagerStatement extends Shape
{
    /**
     * @param array{
     *     ManagedRuleGroupStatement?: ManagedRuleGroupStatement,
     *     RuleGroupReferenceStatement?: RuleGroupReferenceStatement
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
