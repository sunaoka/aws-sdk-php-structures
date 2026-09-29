<?php

namespace Sunaoka\Aws\Structures\Billing\ListBusinessSupportSubscriptionHistory;

trait ListBusinessSupportSubscriptionHistoryTrait
{
    /**
     * @param ListBusinessSupportSubscriptionHistoryRequest $args
     * @return ListBusinessSupportSubscriptionHistoryResponse
     */
    public function listBusinessSupportSubscriptionHistory(ListBusinessSupportSubscriptionHistoryRequest $args)
    {
        $result = parent::listBusinessSupportSubscriptionHistory($args->toArray());
        return new ListBusinessSupportSubscriptionHistoryResponse($result->toArray());
    }
}
