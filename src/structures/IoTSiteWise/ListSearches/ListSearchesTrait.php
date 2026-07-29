<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListSearches;

trait ListSearchesTrait
{
    /**
     * @param ListSearchesRequest $args
     * @return ListSearchesResponse
     */
    public function listSearches(ListSearchesRequest $args)
    {
        $result = parent::listSearches($args->toArray());
        return new ListSearchesResponse($result->toArray());
    }
}
