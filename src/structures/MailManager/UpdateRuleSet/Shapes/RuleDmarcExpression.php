<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS'|'NOT_EQUALS' $Operator
 * @property list<'NONE'|'QUARANTINE'|'REJECT'> $Values
 */
class RuleDmarcExpression extends Shape
{
    /**
     * @param array{
     *     Operator: 'EQUALS'|'NOT_EQUALS',
     *     Values: list<'NONE'|'QUARANTINE'|'REJECT'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
