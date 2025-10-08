<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\GetServiceQuota;

trait GetServiceQuotaTrait
{
    /**
     * @param GetServiceQuotaRequest $args
     * @return GetServiceQuotaResponse
     */
    public function getServiceQuota(GetServiceQuotaRequest $args)
    {
        $result = parent::getServiceQuota($args->toArray());
        return new GetServiceQuotaResponse($result->toArray());
    }
}
