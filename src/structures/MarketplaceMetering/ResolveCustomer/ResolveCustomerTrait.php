<?php

namespace Sunaoka\Aws\Structures\MarketplaceMetering\ResolveCustomer;

trait ResolveCustomerTrait
{
    /**
     * @param ResolveCustomerRequest $args
     * @return ResolveCustomerResponse
     */
    public function resolveCustomer(ResolveCustomerRequest $args)
    {
        $result = parent::resolveCustomer($args->toArray());
        return new ResolveCustomerResponse($result->toArray());
    }
}
