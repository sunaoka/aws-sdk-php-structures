<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetAssetPropertyAggregates;

trait GetAssetPropertyAggregatesTrait
{
    /**
     * @param GetAssetPropertyAggregatesRequest $args
     * @return GetAssetPropertyAggregatesResponse
     */
    public function getAssetPropertyAggregates(GetAssetPropertyAggregatesRequest $args)
    {
        $result = parent::getAssetPropertyAggregates($args->toArray());
        return new GetAssetPropertyAggregatesResponse($result->toArray());
    }
}
