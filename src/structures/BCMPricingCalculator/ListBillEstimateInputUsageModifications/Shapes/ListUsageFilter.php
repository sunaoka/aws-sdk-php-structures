<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimateInputUsageModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USAGE_ACCOUNT_ID'|'SERVICE_CODE'|'USAGE_TYPE'|'OPERATION'|'LOCATION'|'USAGE_GROUP'|'HISTORICAL_USAGE_ACCOUNT_ID'|'HISTORICAL_SERVICE_CODE'|'HISTORICAL_USAGE_TYPE'|'HISTORICAL_OPERATION'|'HISTORICAL_LOCATION' $name
 * @property list<string> $values
 * @property 'EQUALS'|'STARTS_WITH'|'CONTAINS'|null $matchOption
 */
class ListUsageFilter extends Shape
{
    /**
     * @param array{
     *     name: 'USAGE_ACCOUNT_ID'|'SERVICE_CODE'|'USAGE_TYPE'|'OPERATION'|'LOCATION'|'USAGE_GROUP'|'HISTORICAL_USAGE_ACCOUNT_ID'|'HISTORICAL_SERVICE_CODE'|'HISTORICAL_USAGE_TYPE'|'HISTORICAL_OPERATION'|'HISTORICAL_LOCATION',
     *     values: list<string>,
     *     matchOption?: 'EQUALS'|'STARTS_WITH'|'CONTAINS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
