<?php

namespace Sunaoka\Aws\Structures\Route53Domains\GetDomainPrices;

trait GetDomainPricesTrait
{
    /**
     * @param GetDomainPricesRequest $args
     * @return GetDomainPricesResponse
     */
    public function getDomainPrices(GetDomainPricesRequest $args)
    {
        $result = parent::getDomainPrices($args->toArray());
        return new GetDomainPricesResponse($result->toArray());
    }
}
