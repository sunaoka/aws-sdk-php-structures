<?php

namespace Sunaoka\Aws\Structures\Rds\AddTagsToResource;

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
