<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateResponseHeadersPolicy;

trait UpdateResponseHeadersPolicyTrait
{
    /**
     * @param UpdateResponseHeadersPolicyRequest $args
     * @return UpdateResponseHeadersPolicyResponse
     */
    public function updateResponseHeadersPolicy(UpdateResponseHeadersPolicyRequest $args)
    {
        $result = parent::updateResponseHeadersPolicy($args->toArray());
        return new UpdateResponseHeadersPolicyResponse($result->toArray());
    }
}
