<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeletePortalProductSharingPolicy;

trait DeletePortalProductSharingPolicyTrait
{
    /**
     * @param DeletePortalProductSharingPolicyRequest $args
     * @return void
     */
    public function deletePortalProductSharingPolicy(DeletePortalProductSharingPolicyRequest $args)
    {
        parent::deletePortalProductSharingPolicy($args->toArray());
    }
}
