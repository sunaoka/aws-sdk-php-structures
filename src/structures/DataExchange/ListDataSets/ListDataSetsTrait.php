<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListDataSets;

trait ListDataSetsTrait
{
    /**
     * @param ListDataSetsRequest $args
     * @return ListDataSetsResponse
     */
    public function listDataSets(ListDataSetsRequest $args)
    {
        $result = parent::listDataSets($args->toArray());
        return new ListDataSetsResponse($result->toArray());
    }
}
