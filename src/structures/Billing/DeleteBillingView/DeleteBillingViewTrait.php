<?php

namespace Sunaoka\Aws\Structures\Billing\DeleteBillingView;

trait DeleteBillingViewTrait
{
    /**
     * @param DeleteBillingViewRequest $args
     * @return DeleteBillingViewResponse
     */
    public function deleteBillingView(DeleteBillingViewRequest $args)
    {
        $result = parent::deleteBillingView($args->toArray());
        return new DeleteBillingViewResponse($result->toArray());
    }
}
