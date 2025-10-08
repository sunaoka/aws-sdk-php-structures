<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateChapCredentials;

trait UpdateChapCredentialsTrait
{
    /**
     * @param UpdateChapCredentialsRequest $args
     * @return UpdateChapCredentialsResponse
     */
    public function updateChapCredentials(UpdateChapCredentialsRequest $args)
    {
        $result = parent::updateChapCredentials($args->toArray());
        return new UpdateChapCredentialsResponse($result->toArray());
    }
}
