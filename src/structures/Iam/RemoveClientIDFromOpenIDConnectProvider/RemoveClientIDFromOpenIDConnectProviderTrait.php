<?php

namespace Sunaoka\Aws\Structures\Iam\RemoveClientIDFromOpenIDConnectProvider;

trait RemoveClientIDFromOpenIDConnectProviderTrait
{
    /**
     * @param RemoveClientIDFromOpenIDConnectProviderRequest $args
     * @return void
     */
    public function removeClientIDFromOpenIDConnectProvider(RemoveClientIDFromOpenIDConnectProviderRequest $args)
    {
        parent::removeClientIDFromOpenIDConnectProvider($args->toArray());
    }
}
