<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\TagResource;

trait TagResourceTrait
{
    /**
     * @param TagResourceRequest $args
     * @return void
     */
    public function tagResource(TagResourceRequest $args)
    {
        parent::tagResource($args->toArray());
    }
}
