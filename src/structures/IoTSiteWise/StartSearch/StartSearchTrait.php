<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\StartSearch;

trait StartSearchTrait
{
    /**
     * @param StartSearchRequest $args
     * @return StartSearchResponse
     */
    public function startSearch(StartSearchRequest $args)
    {
        $result = parent::startSearch($args->toArray());
        return new StartSearchResponse($result->toArray());
    }
}
