<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListFilteredTransactionEvents;

trait ListFilteredTransactionEventsTrait
{
    /**
     * @param ListFilteredTransactionEventsRequest $args
     * @return ListFilteredTransactionEventsResponse
     */
    public function listFilteredTransactionEvents(ListFilteredTransactionEventsRequest $args)
    {
        $result = parent::listFilteredTransactionEvents($args->toArray());
        return new ListFilteredTransactionEventsResponse($result->toArray());
    }
}
