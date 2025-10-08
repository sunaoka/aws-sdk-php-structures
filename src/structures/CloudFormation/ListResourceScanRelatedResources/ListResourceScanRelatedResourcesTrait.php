<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListResourceScanRelatedResources;

trait ListResourceScanRelatedResourcesTrait
{
    /**
     * @param ListResourceScanRelatedResourcesRequest $args
     * @return ListResourceScanRelatedResourcesResponse
     */
    public function listResourceScanRelatedResources(ListResourceScanRelatedResourcesRequest $args)
    {
        $result = parent::listResourceScanRelatedResources($args->toArray());
        return new ListResourceScanRelatedResourcesResponse($result->toArray());
    }
}
