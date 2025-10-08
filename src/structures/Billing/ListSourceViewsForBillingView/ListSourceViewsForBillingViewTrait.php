<?php

namespace Sunaoka\Aws\Structures\Billing\ListSourceViewsForBillingView;

trait ListSourceViewsForBillingViewTrait
{
    /**
     * @param ListSourceViewsForBillingViewRequest $args
     * @return ListSourceViewsForBillingViewResponse
     */
    public function listSourceViewsForBillingView(ListSourceViewsForBillingViewRequest $args)
    {
        $result = parent::listSourceViewsForBillingView($args->toArray());
        return new ListSourceViewsForBillingViewResponse($result->toArray());
    }
}
