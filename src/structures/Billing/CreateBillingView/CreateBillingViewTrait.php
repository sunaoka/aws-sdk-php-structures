<?php

namespace Sunaoka\Aws\Structures\Billing\CreateBillingView;

trait CreateBillingViewTrait
{
    /**
     * @param CreateBillingViewRequest $args
     * @return CreateBillingViewResponse
     */
    public function createBillingView(CreateBillingViewRequest $args)
    {
        $result = parent::createBillingView($args->toArray());
        return new CreateBillingViewResponse($result->toArray());
    }
}
