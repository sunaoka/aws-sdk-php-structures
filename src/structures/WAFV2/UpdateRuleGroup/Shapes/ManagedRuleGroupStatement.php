<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VendorName
 * @property string $Name
 * @property string|null $Version
 * @property list<ExcludedRule>|null $ExcludedRules
 * @property Statement|null $ScopeDownStatement
 * @property list<ManagedRuleGroupConfig>|null $ManagedRuleGroupConfigs
 * @property list<RuleActionOverride>|null $RuleActionOverrides
 */
class ManagedRuleGroupStatement extends Shape
{
    /**
     * @param array{
     *     VendorName: string,
     *     Name: string,
     *     Version?: string|null,
     *     ExcludedRules?: list<ExcludedRule>|null,
     *     ScopeDownStatement?: Statement|null,
     *     ManagedRuleGroupConfigs?: list<ManagedRuleGroupConfig>|null,
     *     RuleActionOverrides?: list<RuleActionOverride>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
