<?php

namespace Sunaoka\Aws\Structures\WorkLink\ListWebsiteAuthorizationProviders;

trait ListWebsiteAuthorizationProvidersTrait
{
    /**
     * @param ListWebsiteAuthorizationProvidersRequest $args
     * @return ListWebsiteAuthorizationProvidersResponse
     */
    public function listWebsiteAuthorizationProviders(ListWebsiteAuthorizationProvidersRequest $args)
    {
        $result = parent::listWebsiteAuthorizationProviders($args->toArray());
        return new ListWebsiteAuthorizationProvidersResponse($result->toArray());
    }
}
