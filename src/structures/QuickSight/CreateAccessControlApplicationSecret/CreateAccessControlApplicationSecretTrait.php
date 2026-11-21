<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAccessControlApplicationSecret;

trait CreateAccessControlApplicationSecretTrait
{
    /**
     * @param CreateAccessControlApplicationSecretRequest $args
     * @return CreateAccessControlApplicationSecretResponse
     */
    public function createAccessControlApplicationSecret(CreateAccessControlApplicationSecretRequest $args)
    {
        $result = parent::createAccessControlApplicationSecret($args->toArray());
        return new CreateAccessControlApplicationSecretResponse($result->toArray());
    }
}
