<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimateLineItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USAGE_ACCOUNT_ID'|'SERVICE_CODE'|'USAGE_TYPE'|'OPERATION'|'LOCATION'|'LINE_ITEM_TYPE' $name
 * @property list<string> $values
 * @property 'EQUALS'|'STARTS_WITH'|'CONTAINS' $matchOption
 */
class ListBillEstimateLineItemsFilter extends Shape
{
    /**
     * @param array{
     *     name: 'USAGE_ACCOUNT_ID'|'SERVICE_CODE'|'USAGE_TYPE'|'OPERATION'|'LOCATION'|'LINE_ITEM_TYPE',
     *     values: list<string>,
     *     matchOption?: 'EQUALS'|'STARTS_WITH'|'CONTAINS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
