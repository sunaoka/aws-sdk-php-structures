<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateManagedLoginBranding;

trait CreateManagedLoginBrandingTrait
{
    /**
     * @param CreateManagedLoginBrandingRequest $args
     * @return CreateManagedLoginBrandingResponse
     */
    public function createManagedLoginBranding(CreateManagedLoginBrandingRequest $args)
    {
        $result = parent::createManagedLoginBranding($args->toArray());
        return new CreateManagedLoginBrandingResponse($result->toArray());
    }
}
