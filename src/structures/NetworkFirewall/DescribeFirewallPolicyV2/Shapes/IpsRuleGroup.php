<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewallPolicyV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IpsRulesSource $RulesSource
 * @property RuleVariables|null $RuleVariables
 * @property ReferenceSets|null $ReferenceSets
 */
class IpsRuleGroup extends Shape
{
    /**
     * @param array{
     *     RulesSource: IpsRulesSource,
     *     RuleVariables?: RuleVariables|null,
     *     ReferenceSets?: ReferenceSets|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
