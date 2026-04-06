<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListReceivedDataGrants;

trait ListReceivedDataGrantsTrait
{
    /**
     * @param ListReceivedDataGrantsRequest $args
     * @return ListReceivedDataGrantsResponse
     */
    public function listReceivedDataGrants(ListReceivedDataGrantsRequest $args)
    {
        $result = parent::listReceivedDataGrants($args->toArray());
        return new ListReceivedDataGrantsResponse($result->toArray());
    }
}
