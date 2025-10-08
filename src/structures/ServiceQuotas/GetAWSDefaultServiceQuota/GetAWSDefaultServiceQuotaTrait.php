<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\GetAWSDefaultServiceQuota;

trait GetAWSDefaultServiceQuotaTrait
{
    /**
     * @param GetAWSDefaultServiceQuotaRequest $args
     * @return GetAWSDefaultServiceQuotaResponse
     */
    public function getAWSDefaultServiceQuota(GetAWSDefaultServiceQuotaRequest $args)
    {
        $result = parent::getAWSDefaultServiceQuota($args->toArray());
        return new GetAWSDefaultServiceQuotaResponse($result->toArray());
    }
}
