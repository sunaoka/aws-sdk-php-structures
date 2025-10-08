<?php

namespace Sunaoka\Aws\Structures\LakeFormation\AddLFTagsToResource;

trait AddLFTagsToResourceTrait
{
    /**
     * @param AddLFTagsToResourceRequest $args
     * @return AddLFTagsToResourceResponse
     */
    public function addLFTagsToResource(AddLFTagsToResourceRequest $args)
    {
        $result = parent::addLFTagsToResource($args->toArray());
        return new AddLFTagsToResourceResponse($result->toArray());
    }
}
