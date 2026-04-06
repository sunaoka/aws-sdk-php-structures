<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UntagGlobalResource;

trait UntagGlobalResourceTrait
{
    /**
     * @param UntagGlobalResourceRequest $args
     * @return void
     */
    public function untagGlobalResource(UntagGlobalResourceRequest $args)
    {
        parent::untagGlobalResource($args->toArray());
    }
}
