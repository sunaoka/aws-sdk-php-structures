<?php

namespace Sunaoka\Aws\Structures\Rds\RemoveTagsFromResource;

trait RemoveTagsFromResourceTrait
{
    /**
     * @param RemoveTagsFromResourceRequest $args
     * @return void
     */
    public function removeTagsFromResource(RemoveTagsFromResourceRequest $args)
    {
        parent::removeTagsFromResource($args->toArray());
    }
}
