<?php

namespace Sunaoka\Aws\Structures\Neptune\AddTagsToResource;

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
