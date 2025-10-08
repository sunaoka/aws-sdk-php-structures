<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimateLineItems;

trait ListBillEstimateLineItemsTrait
{
    /**
     * @param ListBillEstimateLineItemsRequest $args
     * @return ListBillEstimateLineItemsResponse
     */
    public function listBillEstimateLineItems(ListBillEstimateLineItemsRequest $args)
    {
        $result = parent::listBillEstimateLineItems($args->toArray());
        return new ListBillEstimateLineItemsResponse($result->toArray());
    }
}
