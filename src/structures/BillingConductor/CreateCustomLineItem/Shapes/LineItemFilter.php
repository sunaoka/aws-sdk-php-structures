<?php

namespace Sunaoka\Aws\Structures\BillingConductor\CreateCustomLineItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LINE_ITEM_TYPE'|'SERVICE' $Attribute
 * @property 'NOT_EQUAL'|'EQUAL' $MatchOption
 * @property list<'SAVINGS_PLAN_NEGATION'>|null $Values
 * @property list<string>|null $AttributeValues
 */
class LineItemFilter extends Shape
{
    /**
     * @param array{
     *     Attribute: 'LINE_ITEM_TYPE'|'SERVICE',
     *     MatchOption: 'NOT_EQUAL'|'EQUAL',
     *     Values?: list<'SAVINGS_PLAN_NEGATION'>|null,
     *     AttributeValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
