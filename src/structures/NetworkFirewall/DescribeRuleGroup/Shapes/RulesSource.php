<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RulesString
 * @property RulesSourceList|null $RulesSourceList
 * @property list<StatefulRule>|null $StatefulRules
 * @property StatelessRulesAndCustomActions|null $StatelessRulesAndCustomActions
 */
class RulesSource extends Shape
{
    /**
     * @param array{
     *     RulesString?: string|null,
     *     RulesSourceList?: RulesSourceList|null,
     *     StatefulRules?: list<StatefulRule>|null,
     *     StatelessRulesAndCustomActions?: StatelessRulesAndCustomActions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
