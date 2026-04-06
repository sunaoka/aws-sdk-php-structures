<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimateLineItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billEstimateId
 * @property list<Shapes\ListBillEstimateLineItemsFilter>|null $filters
 * @property string|null $nextToken
 * @property int<min, 25>|null $maxResults
 */
class ListBillEstimateLineItemsRequest extends Request
{
    /**
     * @param array{
     *     billEstimateId: string,
     *     filters?: list<Shapes\ListBillEstimateLineItemsFilter>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<min, 25>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
