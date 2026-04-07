<?php

namespace Sunaoka\Aws\Structures\S3Files\UntagResource;

trait UntagResourceTrait
{
    /**
     * @param UntagResourceRequest $args
     * @return void
     */
    public function untagResource(UntagResourceRequest $args)
    {
        parent::untagResource($args->toArray());
    }
}
