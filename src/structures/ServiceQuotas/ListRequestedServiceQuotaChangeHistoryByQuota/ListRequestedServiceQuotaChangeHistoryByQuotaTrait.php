<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListRequestedServiceQuotaChangeHistoryByQuota;

trait ListRequestedServiceQuotaChangeHistoryByQuotaTrait
{
    /**
     * @param ListRequestedServiceQuotaChangeHistoryByQuotaRequest $args
     * @return ListRequestedServiceQuotaChangeHistoryByQuotaResponse
     */
    public function listRequestedServiceQuotaChangeHistoryByQuota(ListRequestedServiceQuotaChangeHistoryByQuotaRequest $args)
    {
        $result = parent::listRequestedServiceQuotaChangeHistoryByQuota($args->toArray());
        return new ListRequestedServiceQuotaChangeHistoryByQuotaResponse($result->toArray());
    }
}
