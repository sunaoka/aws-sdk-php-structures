<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleBooleanExpression $BooleanExpression
 * @property RuleDmarcExpression $DmarcExpression
 * @property RuleIpExpression $IpExpression
 * @property RuleNumberExpression $NumberExpression
 * @property RuleStringExpression $StringExpression
 * @property RuleVerdictExpression $VerdictExpression
 */
class RuleCondition extends Shape
{
    /**
     * @param array{
     *     BooleanExpression?: RuleBooleanExpression,
     *     DmarcExpression?: RuleDmarcExpression,
     *     IpExpression?: RuleIpExpression,
     *     NumberExpression?: RuleNumberExpression,
     *     StringExpression?: RuleStringExpression,
     *     VerdictExpression?: RuleVerdictExpression
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
