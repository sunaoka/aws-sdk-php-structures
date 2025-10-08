<?php

namespace Sunaoka\Aws\Structures\MWAA\CreateWebLoginToken;

trait CreateWebLoginTokenTrait
{
    /**
     * @param CreateWebLoginTokenRequest $args
     * @return CreateWebLoginTokenResponse
     */
    public function createWebLoginToken(CreateWebLoginTokenRequest $args)
    {
        $result = parent::createWebLoginToken($args->toArray());
        return new CreateWebLoginTokenResponse($result->toArray());
    }
}
