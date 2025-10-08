<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DeleteChapCredentials;

trait DeleteChapCredentialsTrait
{
    /**
     * @param DeleteChapCredentialsRequest $args
     * @return DeleteChapCredentialsResponse
     */
    public function deleteChapCredentials(DeleteChapCredentialsRequest $args)
    {
        $result = parent::deleteChapCredentials($args->toArray());
        return new DeleteChapCredentialsResponse($result->toArray());
    }
}
