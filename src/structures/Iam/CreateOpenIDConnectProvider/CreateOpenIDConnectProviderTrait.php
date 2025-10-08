<?php

namespace Sunaoka\Aws\Structures\Iam\CreateOpenIDConnectProvider;

trait CreateOpenIDConnectProviderTrait
{
    /**
     * @param CreateOpenIDConnectProviderRequest $args
     * @return CreateOpenIDConnectProviderResponse
     */
    public function createOpenIDConnectProvider(CreateOpenIDConnectProviderRequest $args)
    {
        $result = parent::createOpenIDConnectProvider($args->toArray());
        return new CreateOpenIDConnectProviderResponse($result->toArray());
    }
}
