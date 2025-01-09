<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PASS'|'DROP'|'ALERT'|'REJECT' $Action
 * @property Header $Header
 * @property list<RuleOption> $RuleOptions
 */
class StatefulRule extends Shape
{
    /**
     * @param array{
     *     Action: 'PASS'|'DROP'|'ALERT'|'REJECT',
     *     Header: Header,
     *     RuleOptions: list<RuleOption>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
