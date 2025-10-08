<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeletePersonalAccessToken;

trait DeletePersonalAccessTokenTrait
{
    /**
     * @param DeletePersonalAccessTokenRequest $args
     * @return DeletePersonalAccessTokenResponse
     */
    public function deletePersonalAccessToken(DeletePersonalAccessTokenRequest $args)
    {
        $result = parent::deletePersonalAccessToken($args->toArray());
        return new DeletePersonalAccessTokenResponse($result->toArray());
    }
}
