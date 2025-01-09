<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListCustomLineItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LINE_ITEM_TYPE' $Attribute
 * @property 'NOT_EQUAL' $MatchOption
 * @property list<'SAVINGS_PLAN_NEGATION'> $Values
 */
class LineItemFilter extends Shape
{
    /**
     * @param array{
     *     Attribute: 'LINE_ITEM_TYPE',
     *     MatchOption: 'NOT_EQUAL',
     *     Values: list<'SAVINGS_PLAN_NEGATION'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
