<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListRequestedServiceQuotaChangeHistory;

trait ListRequestedServiceQuotaChangeHistoryTrait
{
    /**
     * @param ListRequestedServiceQuotaChangeHistoryRequest $args
     * @return ListRequestedServiceQuotaChangeHistoryResponse
     */
    public function listRequestedServiceQuotaChangeHistory(ListRequestedServiceQuotaChangeHistoryRequest $args)
    {
        $result = parent::listRequestedServiceQuotaChangeHistory($args->toArray());
        return new ListRequestedServiceQuotaChangeHistoryResponse($result->toArray());
    }
}
