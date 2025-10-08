<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeManagedLoginBranding;

trait DescribeManagedLoginBrandingTrait
{
    /**
     * @param DescribeManagedLoginBrandingRequest $args
     * @return DescribeManagedLoginBrandingResponse
     */
    public function describeManagedLoginBranding(DescribeManagedLoginBrandingRequest $args)
    {
        $result = parent::describeManagedLoginBranding($args->toArray());
        return new DescribeManagedLoginBrandingResponse($result->toArray());
    }
}
