<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\DeleteToken;

trait DeleteTokenTrait
{
    /**
     * @param DeleteTokenRequest $args
     * @return DeleteTokenResponse
     */
    public function deleteToken(DeleteTokenRequest $args)
    {
        $result = parent::deleteToken($args->toArray());
        return new DeleteTokenResponse($result->toArray());
    }
}
