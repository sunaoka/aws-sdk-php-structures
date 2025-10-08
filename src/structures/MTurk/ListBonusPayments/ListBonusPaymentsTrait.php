<?php

namespace Sunaoka\Aws\Structures\MTurk\ListBonusPayments;

trait ListBonusPaymentsTrait
{
    /**
     * @param ListBonusPaymentsRequest $args
     * @return ListBonusPaymentsResponse
     */
    public function listBonusPayments(ListBonusPaymentsRequest $args)
    {
        $result = parent::listBonusPayments($args->toArray());
        return new ListBonusPaymentsResponse($result->toArray());
    }
}
