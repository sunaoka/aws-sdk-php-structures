<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateResponseHeadersPolicy;

trait CreateResponseHeadersPolicyTrait
{
    /**
     * @param CreateResponseHeadersPolicyRequest $args
     * @return CreateResponseHeadersPolicyResponse
     */
    public function createResponseHeadersPolicy(CreateResponseHeadersPolicyRequest $args)
    {
        $result = parent::createResponseHeadersPolicy($args->toArray());
        return new CreateResponseHeadersPolicyResponse($result->toArray());
    }
}
