<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListResolvedTestRunTargetResources;

trait ListResolvedTestRunTargetResourcesTrait
{
    /**
     * @param ListResolvedTestRunTargetResourcesRequest $args
     * @return ListResolvedTestRunTargetResourcesResponse
     */
    public function listResolvedTestRunTargetResources(ListResolvedTestRunTargetResourcesRequest $args)
    {
        $result = parent::listResolvedTestRunTargetResources($args->toArray());
        return new ListResolvedTestRunTargetResourcesResponse($result->toArray());
    }
}
