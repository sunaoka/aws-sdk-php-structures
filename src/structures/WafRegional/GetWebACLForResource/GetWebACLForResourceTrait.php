<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetWebACLForResource;

trait GetWebACLForResourceTrait
{
    /**
     * @param GetWebACLForResourceRequest $args
     * @return GetWebACLForResourceResponse
     */
    public function getWebACLForResource(GetWebACLForResourceRequest $args)
    {
        $result = parent::getWebACLForResource($args->toArray());
        return new GetWebACLForResourceResponse($result->toArray());
    }
}
