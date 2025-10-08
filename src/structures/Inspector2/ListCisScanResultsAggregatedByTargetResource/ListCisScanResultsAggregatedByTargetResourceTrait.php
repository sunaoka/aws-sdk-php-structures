<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByTargetResource;

trait ListCisScanResultsAggregatedByTargetResourceTrait
{
    /**
     * @param ListCisScanResultsAggregatedByTargetResourceRequest $args
     * @return ListCisScanResultsAggregatedByTargetResourceResponse
     */
    public function listCisScanResultsAggregatedByTargetResource(ListCisScanResultsAggregatedByTargetResourceRequest $args)
    {
        $result = parent::listCisScanResultsAggregatedByTargetResource($args->toArray());
        return new ListCisScanResultsAggregatedByTargetResourceResponse($result->toArray());
    }
}
