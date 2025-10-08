<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UntagResource;

trait UntagResourceTrait
{
    /**
     * @param UntagResourceRequest $args
     * @return UntagResourceResponse
     */
    public function untagResource(UntagResourceRequest $args)
    {
        $result = parent::untagResource($args->toArray());
        return new UntagResourceResponse($result->toArray());
    }
}
