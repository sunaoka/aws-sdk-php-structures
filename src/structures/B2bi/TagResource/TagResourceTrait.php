<?php

namespace Sunaoka\Aws\Structures\B2bi\TagResource;

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
