<?php

namespace Sunaoka\Aws\Structures\Billing\ListBillingViews;

trait ListBillingViewsTrait
{
    /**
     * @param ListBillingViewsRequest $args
     * @return ListBillingViewsResponse
     */
    public function listBillingViews(ListBillingViewsRequest $args)
    {
        $result = parent::listBillingViews($args->toArray());
        return new ListBillingViewsResponse($result->toArray());
    }
}
