<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAccessControlApplicationSecret;

trait UpdateAccessControlApplicationSecretTrait
{
    /**
     * @param UpdateAccessControlApplicationSecretRequest $args
     * @return UpdateAccessControlApplicationSecretResponse
     */
    public function updateAccessControlApplicationSecret(UpdateAccessControlApplicationSecretRequest $args)
    {
        $result = parent::updateAccessControlApplicationSecret($args->toArray());
        return new UpdateAccessControlApplicationSecretResponse($result->toArray());
    }
}
