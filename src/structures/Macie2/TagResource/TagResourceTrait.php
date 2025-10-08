<?php

namespace Sunaoka\Aws\Structures\Macie2\TagResource;

trait TagResourceTrait
{
    /**
     * @param TagResourceRequest $args
     * @return TagResourceResponse
     */
    public function tagResource(TagResourceRequest $args)
    {
        $result = parent::tagResource($args->toArray());
        return new TagResourceResponse($result->toArray());
    }
}
