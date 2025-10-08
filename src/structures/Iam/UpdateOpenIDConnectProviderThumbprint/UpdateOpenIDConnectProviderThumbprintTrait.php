<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateOpenIDConnectProviderThumbprint;

trait UpdateOpenIDConnectProviderThumbprintTrait
{
    /**
     * @param UpdateOpenIDConnectProviderThumbprintRequest $args
     * @return void
     */
    public function updateOpenIDConnectProviderThumbprint(UpdateOpenIDConnectProviderThumbprintRequest $args)
    {
        parent::updateOpenIDConnectProviderThumbprint($args->toArray());
    }
}
