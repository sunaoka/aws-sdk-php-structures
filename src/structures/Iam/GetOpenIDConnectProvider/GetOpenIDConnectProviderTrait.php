<?php

namespace Sunaoka\Aws\Structures\Iam\GetOpenIDConnectProvider;

trait GetOpenIDConnectProviderTrait
{
    /**
     * @param GetOpenIDConnectProviderRequest $args
     * @return GetOpenIDConnectProviderResponse
     */
    public function getOpenIDConnectProvider(GetOpenIDConnectProviderRequest $args)
    {
        $result = parent::getOpenIDConnectProvider($args->toArray());
        return new GetOpenIDConnectProviderResponse($result->toArray());
    }
}
