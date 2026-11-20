<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateOpenIDConnectProvider;

trait UpdateOpenIDConnectProviderTrait
{
    /**
     * @param UpdateOpenIDConnectProviderRequest $args
     * @return void
     */
    public function updateOpenIDConnectProvider(UpdateOpenIDConnectProviderRequest $args)
    {
        parent::updateOpenIDConnectProvider($args->toArray());
    }
}
