<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VendorName
 * @property string $Name
 * @property string $Version
 * @property list<ExcludedRule> $ExcludedRules
 * @property Statement $ScopeDownStatement
 * @property list<ManagedRuleGroupConfig> $ManagedRuleGroupConfigs
 * @property list<RuleActionOverride> $RuleActionOverrides
 */
class ManagedRuleGroupStatement extends Shape
{
    /**
     * @param array{
     *     VendorName: string,
     *     Name: string,
     *     Version?: string,
     *     ExcludedRules?: list<ExcludedRule>,
     *     ScopeDownStatement?: Statement,
     *     ManagedRuleGroupConfigs?: list<ManagedRuleGroupConfig>,
     *     RuleActionOverrides?: list<RuleActionOverride>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
