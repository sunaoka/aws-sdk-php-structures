<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FirewallRulesSource $RulesSource
 * @property RuleVariables|null $RuleVariables
 * @property ReferenceSets|null $ReferenceSets
 */
class FirewallRuleGroup extends Shape
{
    /**
     * @param array{
     *     RulesSource: FirewallRulesSource,
     *     RuleVariables?: RuleVariables|null,
     *     ReferenceSets?: ReferenceSets|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
