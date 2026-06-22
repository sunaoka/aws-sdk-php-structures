<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\CreateMicrovmShellAuthToken;

trait CreateMicrovmShellAuthTokenTrait
{
    /**
     * @param CreateMicrovmShellAuthTokenRequest $args
     * @return CreateMicrovmShellAuthTokenResponse
     */
    public function createMicrovmShellAuthToken(CreateMicrovmShellAuthTokenRequest $args)
    {
        $result = parent::createMicrovmShellAuthToken($args->toArray());
        return new CreateMicrovmShellAuthTokenResponse($result->toArray());
    }
}
