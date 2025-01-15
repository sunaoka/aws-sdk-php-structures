<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleBooleanExpression|null $BooleanExpression
 * @property RuleDmarcExpression|null $DmarcExpression
 * @property RuleIpExpression|null $IpExpression
 * @property RuleNumberExpression|null $NumberExpression
 * @property RuleStringExpression|null $StringExpression
 * @property RuleVerdictExpression|null $VerdictExpression
 */
class RuleCondition extends Shape
{
    /**
     * @param array{
     *     BooleanExpression?: RuleBooleanExpression|null,
     *     DmarcExpression?: RuleDmarcExpression|null,
     *     IpExpression?: RuleIpExpression|null,
     *     NumberExpression?: RuleNumberExpression|null,
     *     StringExpression?: RuleStringExpression|null,
     *     VerdictExpression?: RuleVerdictExpression|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
