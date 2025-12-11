<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchActionConnectors;

trait SearchActionConnectorsTrait
{
    /**
     * @param SearchActionConnectorsRequest $args
     * @return SearchActionConnectorsResponse
     */
    public function searchActionConnectors(SearchActionConnectorsRequest $args)
    {
        $result = parent::searchActionConnectors($args->toArray());
        return new SearchActionConnectorsResponse($result->toArray());
    }
}
