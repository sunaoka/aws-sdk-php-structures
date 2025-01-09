<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimateLineItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billEstimateId
 * @property list<Shapes\ListBillEstimateLineItemsFilter> $filters
 * @property string $nextToken
 * @property int<min, 25> $maxResults
 */
class ListBillEstimateLineItemsRequest extends Request
{
    /**
     * @param array{
     *     billEstimateId: string,
     *     filters?: list<Shapes\ListBillEstimateLineItemsFilter>,
     *     nextToken?: string,
     *     maxResults?: int<min, 25>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
