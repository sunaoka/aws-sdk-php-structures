<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetResponseHeadersPolicy;

trait GetResponseHeadersPolicyTrait
{
    /**
     * @param GetResponseHeadersPolicyRequest $args
     * @return GetResponseHeadersPolicyResponse
     */
    public function getResponseHeadersPolicy(GetResponseHeadersPolicyRequest $args)
    {
        $result = parent::getResponseHeadersPolicy($args->toArray());
        return new GetResponseHeadersPolicyResponse($result->toArray());
    }
}
