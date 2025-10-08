<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\TagResource;

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
