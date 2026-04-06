<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\PutPortalProductSharingPolicy;

trait PutPortalProductSharingPolicyTrait
{
    /**
     * @param PutPortalProductSharingPolicyRequest $args
     * @return PutPortalProductSharingPolicyResponse
     */
    public function putPortalProductSharingPolicy(PutPortalProductSharingPolicyRequest $args)
    {
        $result = parent::putPortalProductSharingPolicy($args->toArray());
        return new PutPortalProductSharingPolicyResponse($result->toArray());
    }
}
