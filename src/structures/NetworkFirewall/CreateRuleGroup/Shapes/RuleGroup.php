<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleVariables $RuleVariables
 * @property ReferenceSets $ReferenceSets
 * @property RulesSource $RulesSource
 * @property StatefulRuleOptions $StatefulRuleOptions
 */
class RuleGroup extends Shape
{
    /**
     * @param array{
     *     RuleVariables?: RuleVariables,
     *     ReferenceSets?: ReferenceSets,
     *     RulesSource: RulesSource,
     *     StatefulRuleOptions?: StatefulRuleOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
