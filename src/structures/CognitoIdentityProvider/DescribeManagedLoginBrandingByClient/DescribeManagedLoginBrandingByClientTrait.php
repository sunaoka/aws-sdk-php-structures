<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeManagedLoginBrandingByClient;

trait DescribeManagedLoginBrandingByClientTrait
{
    /**
     * @param DescribeManagedLoginBrandingByClientRequest $args
     * @return DescribeManagedLoginBrandingByClientResponse
     */
    public function describeManagedLoginBrandingByClient(DescribeManagedLoginBrandingByClientRequest $args)
    {
        $result = parent::describeManagedLoginBrandingByClient($args->toArray());
        return new DescribeManagedLoginBrandingByClientResponse($result->toArray());
    }
}
