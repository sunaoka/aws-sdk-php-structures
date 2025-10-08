<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\DeleteIdentities;

trait DeleteIdentitiesTrait
{
    /**
     * @param DeleteIdentitiesRequest $args
     * @return DeleteIdentitiesResponse
     */
    public function deleteIdentities(DeleteIdentitiesRequest $args)
    {
        $result = parent::deleteIdentities($args->toArray());
        return new DeleteIdentitiesResponse($result->toArray());
    }
}
