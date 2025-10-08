<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListOfferingTransactions;

trait ListOfferingTransactionsTrait
{
    /**
     * @param ListOfferingTransactionsRequest $args
     * @return ListOfferingTransactionsResponse
     */
    public function listOfferingTransactions(ListOfferingTransactionsRequest $args)
    {
        $result = parent::listOfferingTransactions($args->toArray());
        return new ListOfferingTransactionsResponse($result->toArray());
    }
}
