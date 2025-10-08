<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessTrustProvider;

trait ModifyVerifiedAccessTrustProviderTrait
{
    /**
     * @param ModifyVerifiedAccessTrustProviderRequest $args
     * @return ModifyVerifiedAccessTrustProviderResponse
     */
    public function modifyVerifiedAccessTrustProvider(ModifyVerifiedAccessTrustProviderRequest $args)
    {
        $result = parent::modifyVerifiedAccessTrustProvider($args->toArray());
        return new ModifyVerifiedAccessTrustProviderResponse($result->toArray());
    }
}
