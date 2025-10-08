<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessTrustProvider;

trait CreateVerifiedAccessTrustProviderTrait
{
    /**
     * @param CreateVerifiedAccessTrustProviderRequest $args
     * @return CreateVerifiedAccessTrustProviderResponse
     */
    public function createVerifiedAccessTrustProvider(CreateVerifiedAccessTrustProviderRequest $args)
    {
        $result = parent::createVerifiedAccessTrustProvider($args->toArray());
        return new CreateVerifiedAccessTrustProviderResponse($result->toArray());
    }
}
