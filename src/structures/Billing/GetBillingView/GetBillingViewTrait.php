<?php

namespace Sunaoka\Aws\Structures\Billing\GetBillingView;

trait GetBillingViewTrait
{
    /**
     * @param GetBillingViewRequest $args
     * @return GetBillingViewResponse
     */
    public function getBillingView(GetBillingViewRequest $args)
    {
        $result = parent::getBillingView($args->toArray());
        return new GetBillingViewResponse($result->toArray());
    }
}
