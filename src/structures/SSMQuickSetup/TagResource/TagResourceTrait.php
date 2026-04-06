<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\TagResource;

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
