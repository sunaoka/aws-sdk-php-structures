<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\RequestServiceQuotaIncrease;

trait RequestServiceQuotaIncreaseTrait
{
    /**
     * @param RequestServiceQuotaIncreaseRequest $args
     * @return RequestServiceQuotaIncreaseResponse
     */
    public function requestServiceQuotaIncrease(RequestServiceQuotaIncreaseRequest $args)
    {
        $result = parent::requestServiceQuotaIncrease($args->toArray());
        return new RequestServiceQuotaIncreaseResponse($result->toArray());
    }
}
