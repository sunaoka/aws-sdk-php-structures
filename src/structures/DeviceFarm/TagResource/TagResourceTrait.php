<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\TagResource;

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
