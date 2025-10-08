<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListTransactionEvents;

trait ListTransactionEventsTrait
{
    /**
     * @param ListTransactionEventsRequest $args
     * @return ListTransactionEventsResponse
     */
    public function listTransactionEvents(ListTransactionEventsRequest $args)
    {
        $result = parent::listTransactionEvents($args->toArray());
        return new ListTransactionEventsResponse($result->toArray());
    }
}
