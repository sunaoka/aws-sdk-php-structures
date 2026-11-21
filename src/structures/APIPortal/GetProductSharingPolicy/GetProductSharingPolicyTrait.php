<?php

namespace Sunaoka\Aws\Structures\APIPortal\GetProductSharingPolicy;

trait GetProductSharingPolicyTrait
{
    /**
     * @param GetProductSharingPolicyRequest $args
     * @return GetProductSharingPolicyResponse
     */
    public function getProductSharingPolicy(GetProductSharingPolicyRequest $args)
    {
        $result = parent::getProductSharingPolicy($args->toArray());
        return new GetProductSharingPolicyResponse($result->toArray());
    }
}
