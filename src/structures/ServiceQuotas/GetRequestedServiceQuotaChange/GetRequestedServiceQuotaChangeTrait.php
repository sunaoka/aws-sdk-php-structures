<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\GetRequestedServiceQuotaChange;

trait GetRequestedServiceQuotaChangeTrait
{
    /**
     * @param GetRequestedServiceQuotaChangeRequest $args
     * @return GetRequestedServiceQuotaChangeResponse
     */
    public function getRequestedServiceQuotaChange(GetRequestedServiceQuotaChangeRequest $args)
    {
        $result = parent::getRequestedServiceQuotaChange($args->toArray());
        return new GetRequestedServiceQuotaChangeResponse($result->toArray());
    }
}
