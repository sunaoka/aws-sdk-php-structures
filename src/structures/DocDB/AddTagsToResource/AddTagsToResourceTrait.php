<?php

namespace Sunaoka\Aws\Structures\DocDB\AddTagsToResource;

trait AddTagsToResourceTrait
{
    /**
     * @param AddTagsToResourceRequest $args
     * @return void
     */
    public function addTagsToResource(AddTagsToResourceRequest $args)
    {
        parent::addTagsToResource($args->toArray());
    }
}
