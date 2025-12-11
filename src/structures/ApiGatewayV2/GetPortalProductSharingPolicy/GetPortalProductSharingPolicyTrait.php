<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetPortalProductSharingPolicy;

trait GetPortalProductSharingPolicyTrait
{
    /**
     * @param GetPortalProductSharingPolicyRequest $args
     * @return GetPortalProductSharingPolicyResponse
     */
    public function getPortalProductSharingPolicy(GetPortalProductSharingPolicyRequest $args)
    {
        $result = parent::getPortalProductSharingPolicy($args->toArray());
        return new GetPortalProductSharingPolicyResponse($result->toArray());
    }
}
