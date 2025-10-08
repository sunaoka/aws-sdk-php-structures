<?php

namespace Sunaoka\Aws\Structures\StorageGateway\AddTagsToResource;

trait AddTagsToResourceTrait
{
    /**
     * @param AddTagsToResourceRequest $args
     * @return AddTagsToResourceResponse
     */
    public function addTagsToResource(AddTagsToResourceRequest $args)
    {
        $result = parent::addTagsToResource($args->toArray());
        return new AddTagsToResourceResponse($result->toArray());
    }
}
