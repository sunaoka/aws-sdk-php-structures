<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateManagedLoginBranding;

trait UpdateManagedLoginBrandingTrait
{
    /**
     * @param UpdateManagedLoginBrandingRequest $args
     * @return UpdateManagedLoginBrandingResponse
     */
    public function updateManagedLoginBranding(UpdateManagedLoginBrandingRequest $args)
    {
        $result = parent::updateManagedLoginBranding($args->toArray());
        return new UpdateManagedLoginBrandingResponse($result->toArray());
    }
}
