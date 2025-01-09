<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RulesString
 * @property RulesSourceList $RulesSourceList
 * @property list<StatefulRule> $StatefulRules
 * @property StatelessRulesAndCustomActions $StatelessRulesAndCustomActions
 */
class RulesSource extends Shape
{
    /**
     * @param array{
     *     RulesString?: string,
     *     RulesSourceList?: RulesSourceList,
     *     StatefulRules?: list<StatefulRule>,
     *     StatelessRulesAndCustomActions?: StatelessRulesAndCustomActions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
