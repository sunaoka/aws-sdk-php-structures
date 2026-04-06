<?php

namespace Sunaoka\Aws\Structures\WorkLink\DisassociateWebsiteAuthorizationProvider;

trait DisassociateWebsiteAuthorizationProviderTrait
{
    /**
     * @param DisassociateWebsiteAuthorizationProviderRequest $args
     * @return DisassociateWebsiteAuthorizationProviderResponse
     */
    public function disassociateWebsiteAuthorizationProvider(DisassociateWebsiteAuthorizationProviderRequest $args)
    {
        $result = parent::disassociateWebsiteAuthorizationProvider($args->toArray());
        return new DisassociateWebsiteAuthorizationProviderResponse($result->toArray());
    }
}
