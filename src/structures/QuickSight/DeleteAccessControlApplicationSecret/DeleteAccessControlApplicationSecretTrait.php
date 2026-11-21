<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteAccessControlApplicationSecret;

trait DeleteAccessControlApplicationSecretTrait
{
    /**
     * @param DeleteAccessControlApplicationSecretRequest $args
     * @return DeleteAccessControlApplicationSecretResponse
     */
    public function deleteAccessControlApplicationSecret(DeleteAccessControlApplicationSecretRequest $args)
    {
        $result = parent::deleteAccessControlApplicationSecret($args->toArray());
        return new DeleteAccessControlApplicationSecretResponse($result->toArray());
    }
}
