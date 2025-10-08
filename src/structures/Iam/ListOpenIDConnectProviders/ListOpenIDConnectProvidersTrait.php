<?php

namespace Sunaoka\Aws\Structures\Iam\ListOpenIDConnectProviders;

trait ListOpenIDConnectProvidersTrait
{
    /**
     * @param ListOpenIDConnectProvidersRequest $args
     * @return ListOpenIDConnectProvidersResponse
     */
    public function listOpenIDConnectProviders(ListOpenIDConnectProvidersRequest $args)
    {
        $result = parent::listOpenIDConnectProviders($args->toArray());
        return new ListOpenIDConnectProvidersResponse($result->toArray());
    }
}
