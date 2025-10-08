<?php

namespace Sunaoka\Aws\Structures\Organizations\TagResource;

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
