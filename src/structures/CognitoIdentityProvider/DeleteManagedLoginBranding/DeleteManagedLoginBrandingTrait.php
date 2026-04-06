<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DeleteManagedLoginBranding;

trait DeleteManagedLoginBrandingTrait
{
    /**
     * @param DeleteManagedLoginBrandingRequest $args
     * @return void
     */
    public function deleteManagedLoginBranding(DeleteManagedLoginBrandingRequest $args)
    {
        parent::deleteManagedLoginBranding($args->toArray());
    }
}
