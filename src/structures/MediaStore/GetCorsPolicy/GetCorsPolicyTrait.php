<?php

namespace Sunaoka\Aws\Structures\MediaStore\GetCorsPolicy;

trait GetCorsPolicyTrait
{
    /**
     * @param GetCorsPolicyRequest $args
     * @return GetCorsPolicyResponse
     */
    public function getCorsPolicy(GetCorsPolicyRequest $args)
    {
        $result = parent::getCorsPolicy($args->toArray());
        return new GetCorsPolicyResponse($result->toArray());
    }
}
