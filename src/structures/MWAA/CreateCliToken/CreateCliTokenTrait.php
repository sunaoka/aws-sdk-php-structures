<?php

namespace Sunaoka\Aws\Structures\MWAA\CreateCliToken;

trait CreateCliTokenTrait
{
    /**
     * @param CreateCliTokenRequest $args
     * @return CreateCliTokenResponse
     */
    public function createCliToken(CreateCliTokenRequest $args)
    {
        $result = parent::createCliToken($args->toArray());
        return new CreateCliTokenResponse($result->toArray());
    }
}
