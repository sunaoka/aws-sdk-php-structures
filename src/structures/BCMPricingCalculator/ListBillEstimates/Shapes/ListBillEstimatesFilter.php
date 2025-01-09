<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STATUS'|'NAME' $name
 * @property list<string> $values
 * @property 'EQUALS'|'STARTS_WITH'|'CONTAINS' $matchOption
 */
class ListBillEstimatesFilter extends Shape
{
    /**
     * @param array{
     *     name: 'STATUS'|'NAME',
     *     values: list<string>,
     *     matchOption?: 'EQUALS'|'STARTS_WITH'|'CONTAINS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
