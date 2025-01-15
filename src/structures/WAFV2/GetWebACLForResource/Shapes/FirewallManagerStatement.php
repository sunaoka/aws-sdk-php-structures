<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACLForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ManagedRuleGroupStatement|null $ManagedRuleGroupStatement
 * @property RuleGroupReferenceStatement|null $RuleGroupReferenceStatement
 */
class FirewallManagerStatement extends Shape
{
    /**
     * @param array{
     *     ManagedRuleGroupStatement?: ManagedRuleGroupStatement|null,
     *     RuleGroupReferenceStatement?: RuleGroupReferenceStatement|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
