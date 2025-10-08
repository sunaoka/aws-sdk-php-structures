<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\UntagResource;

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
