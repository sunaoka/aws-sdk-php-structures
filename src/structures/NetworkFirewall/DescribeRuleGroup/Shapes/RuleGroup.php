<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleVariables|null $RuleVariables
 * @property ReferenceSets|null $ReferenceSets
 * @property RulesSource $RulesSource
 * @property StatefulRuleOptions|null $StatefulRuleOptions
 */
class RuleGroup extends Shape
{
    /**
     * @param array{
     *     RuleVariables?: RuleVariables|null,
     *     ReferenceSets?: ReferenceSets|null,
     *     RulesSource: RulesSource,
     *     StatefulRuleOptions?: StatefulRuleOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
