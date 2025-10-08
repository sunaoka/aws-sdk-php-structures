<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetResourceLFTags;

trait GetResourceLFTagsTrait
{
    /**
     * @param GetResourceLFTagsRequest $args
     * @return GetResourceLFTagsResponse
     */
    public function getResourceLFTags(GetResourceLFTagsRequest $args)
    {
        $result = parent::getResourceLFTags($args->toArray());
        return new GetResourceLFTagsResponse($result->toArray());
    }
}
