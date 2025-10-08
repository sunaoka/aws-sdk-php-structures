<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\DeleteAccessToken;

trait DeleteAccessTokenTrait
{
    /**
     * @param DeleteAccessTokenRequest $args
     * @return DeleteAccessTokenResponse
     */
    public function deleteAccessToken(DeleteAccessTokenRequest $args)
    {
        $result = parent::deleteAccessToken($args->toArray());
        return new DeleteAccessTokenResponse($result->toArray());
    }
}
