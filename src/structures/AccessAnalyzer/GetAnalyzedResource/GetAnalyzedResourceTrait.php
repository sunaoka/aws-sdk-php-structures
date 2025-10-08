<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAnalyzedResource;

trait GetAnalyzedResourceTrait
{
    /**
     * @param GetAnalyzedResourceRequest $args
     * @return GetAnalyzedResourceResponse
     */
    public function getAnalyzedResource(GetAnalyzedResourceRequest $args)
    {
        $result = parent::getAnalyzedResource($args->toArray());
        return new GetAnalyzedResourceResponse($result->toArray());
    }
}
