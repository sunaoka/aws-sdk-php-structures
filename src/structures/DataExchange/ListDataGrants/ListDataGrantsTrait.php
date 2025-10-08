<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListDataGrants;

trait ListDataGrantsTrait
{
    /**
     * @param ListDataGrantsRequest $args
     * @return ListDataGrantsResponse
     */
    public function listDataGrants(ListDataGrantsRequest $args)
    {
        $result = parent::listDataGrants($args->toArray());
        return new ListDataGrantsResponse($result->toArray());
    }
}
