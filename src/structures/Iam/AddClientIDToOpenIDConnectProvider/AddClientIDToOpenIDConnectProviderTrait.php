<?php

namespace Sunaoka\Aws\Structures\Iam\AddClientIDToOpenIDConnectProvider;

trait AddClientIDToOpenIDConnectProviderTrait
{
    /**
     * @param AddClientIDToOpenIDConnectProviderRequest $args
     * @return void
     */
    public function addClientIDToOpenIDConnectProvider(AddClientIDToOpenIDConnectProviderRequest $args)
    {
        parent::addClientIDToOpenIDConnectProvider($args->toArray());
    }
}
