<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVerifiedAccessTrustProvider;

trait DeleteVerifiedAccessTrustProviderTrait
{
    /**
     * @param DeleteVerifiedAccessTrustProviderRequest $args
     * @return DeleteVerifiedAccessTrustProviderResponse
     */
    public function deleteVerifiedAccessTrustProvider(DeleteVerifiedAccessTrustProviderRequest $args)
    {
        $result = parent::deleteVerifiedAccessTrustProvider($args->toArray());
        return new DeleteVerifiedAccessTrustProviderResponse($result->toArray());
    }
}
