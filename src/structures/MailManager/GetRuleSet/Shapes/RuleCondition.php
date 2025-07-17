<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleBooleanExpression|null $BooleanExpression
 * @property RuleStringExpression|null $StringExpression
 * @property RuleNumberExpression|null $NumberExpression
 * @property RuleIpExpression|null $IpExpression
 * @property RuleVerdictExpression|null $VerdictExpression
 * @property RuleDmarcExpression|null $DmarcExpression
 */
class RuleCondition extends Shape
{
    /**
     * @param array{
     *     BooleanExpression?: RuleBooleanExpression|null,
     *     StringExpression?: RuleStringExpression|null,
     *     NumberExpression?: RuleNumberExpression|null,
     *     IpExpression?: RuleIpExpression|null,
     *     VerdictExpression?: RuleVerdictExpression|null,
     *     DmarcExpression?: RuleDmarcExpression|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
