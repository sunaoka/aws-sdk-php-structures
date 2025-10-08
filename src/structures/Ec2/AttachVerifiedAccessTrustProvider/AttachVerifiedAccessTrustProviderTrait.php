<?php

namespace Sunaoka\Aws\Structures\Ec2\AttachVerifiedAccessTrustProvider;

trait AttachVerifiedAccessTrustProviderTrait
{
    /**
     * @param AttachVerifiedAccessTrustProviderRequest $args
     * @return AttachVerifiedAccessTrustProviderResponse
     */
    public function attachVerifiedAccessTrustProvider(AttachVerifiedAccessTrustProviderRequest $args)
    {
        $result = parent::attachVerifiedAccessTrustProvider($args->toArray());
        return new AttachVerifiedAccessTrustProviderResponse($result->toArray());
    }
}
