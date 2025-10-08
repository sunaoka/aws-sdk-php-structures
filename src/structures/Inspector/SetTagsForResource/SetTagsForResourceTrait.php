<?php

namespace Sunaoka\Aws\Structures\Inspector\SetTagsForResource;

trait SetTagsForResourceTrait
{
    /**
     * @param SetTagsForResourceRequest $args
     * @return void
     */
    public function setTagsForResource(SetTagsForResourceRequest $args)
    {
        parent::setTagsForResource($args->toArray());
    }
}
