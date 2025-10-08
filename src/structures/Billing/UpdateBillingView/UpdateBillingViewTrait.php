<?php

namespace Sunaoka\Aws\Structures\Billing\UpdateBillingView;

trait UpdateBillingViewTrait
{
    /**
     * @param UpdateBillingViewRequest $args
     * @return UpdateBillingViewResponse
     */
    public function updateBillingView(UpdateBillingViewRequest $args)
    {
        $result = parent::updateBillingView($args->toArray());
        return new UpdateBillingViewResponse($result->toArray());
    }
}
