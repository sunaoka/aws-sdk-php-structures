<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListResponseHeadersPolicies;

trait ListResponseHeadersPoliciesTrait
{
    /**
     * @param ListResponseHeadersPoliciesRequest $args
     * @return ListResponseHeadersPoliciesResponse
     */
    public function listResponseHeadersPolicies(ListResponseHeadersPoliciesRequest $args)
    {
        $result = parent::listResponseHeadersPolicies($args->toArray());
        return new ListResponseHeadersPoliciesResponse($result->toArray());
    }
}
