<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ARN
 * @property list<ExcludedRule> $ExcludedRules
 * @property list<RuleActionOverride> $RuleActionOverrides
 */
class RuleGroupReferenceStatement extends Shape
{
    /**
     * @param array{
     *     ARN: string,
     *     ExcludedRules?: list<ExcludedRule>,
     *     RuleActionOverrides?: list<RuleActionOverride>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
