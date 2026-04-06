<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\DeleteAccessToken;

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
