<?php

namespace Sunaoka\Aws\Structures\MediaConnect\TagGlobalResource;

trait TagGlobalResourceTrait
{
    /**
     * @param TagGlobalResourceRequest $args
     * @return void
     */
    public function tagGlobalResource(TagGlobalResourceRequest $args)
    {
        parent::tagGlobalResource($args->toArray());
    }
}
