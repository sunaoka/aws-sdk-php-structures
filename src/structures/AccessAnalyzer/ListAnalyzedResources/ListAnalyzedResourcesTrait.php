<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListAnalyzedResources;

trait ListAnalyzedResourcesTrait
{
    /**
     * @param ListAnalyzedResourcesRequest $args
     * @return ListAnalyzedResourcesResponse
     */
    public function listAnalyzedResources(ListAnalyzedResourcesRequest $args)
    {
        $result = parent::listAnalyzedResources($args->toArray());
        return new ListAnalyzedResourcesResponse($result->toArray());
    }
}
