<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyAggregates;

trait BatchGetAssetPropertyAggregatesTrait
{
    /**
     * @param BatchGetAssetPropertyAggregatesRequest $args
     * @return BatchGetAssetPropertyAggregatesResponse
     */
    public function batchGetAssetPropertyAggregates(BatchGetAssetPropertyAggregatesRequest $args)
    {
        $result = parent::batchGetAssetPropertyAggregates($args->toArray());
        return new BatchGetAssetPropertyAggregatesResponse($result->toArray());
    }
}
