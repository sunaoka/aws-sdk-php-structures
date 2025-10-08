<?php

namespace Sunaoka\Aws\Structures\Ec2\DetachVerifiedAccessTrustProvider;

trait DetachVerifiedAccessTrustProviderTrait
{
    /**
     * @param DetachVerifiedAccessTrustProviderRequest $args
     * @return DetachVerifiedAccessTrustProviderResponse
     */
    public function detachVerifiedAccessTrustProvider(DetachVerifiedAccessTrustProviderRequest $args)
    {
        $result = parent::detachVerifiedAccessTrustProvider($args->toArray());
        return new DetachVerifiedAccessTrustProviderResponse($result->toArray());
    }
}
