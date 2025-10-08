<?php

namespace Sunaoka\Aws\Structures\DirectoryService\AddTagsToResource;

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
