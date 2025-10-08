<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteOpenIDConnectProvider;

trait DeleteOpenIDConnectProviderTrait
{
    /**
     * @param DeleteOpenIDConnectProviderRequest $args
     * @return void
     */
    public function deleteOpenIDConnectProvider(DeleteOpenIDConnectProviderRequest $args)
    {
        parent::deleteOpenIDConnectProvider($args->toArray());
    }
}
