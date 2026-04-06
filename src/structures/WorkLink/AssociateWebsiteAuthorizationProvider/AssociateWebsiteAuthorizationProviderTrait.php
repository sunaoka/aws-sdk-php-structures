<?php

namespace Sunaoka\Aws\Structures\WorkLink\AssociateWebsiteAuthorizationProvider;

trait AssociateWebsiteAuthorizationProviderTrait
{
    /**
     * @param AssociateWebsiteAuthorizationProviderRequest $args
     * @return AssociateWebsiteAuthorizationProviderResponse
     */
    public function associateWebsiteAuthorizationProvider(AssociateWebsiteAuthorizationProviderRequest $args)
    {
        $result = parent::associateWebsiteAuthorizationProvider($args->toArray());
        return new AssociateWebsiteAuthorizationProviderResponse($result->toArray());
    }
}
