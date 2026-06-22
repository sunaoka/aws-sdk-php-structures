<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\CreateMicrovmAuthToken;

trait CreateMicrovmAuthTokenTrait
{
    /**
     * @param CreateMicrovmAuthTokenRequest $args
     * @return CreateMicrovmAuthTokenResponse
     */
    public function createMicrovmAuthToken(CreateMicrovmAuthTokenRequest $args)
    {
        $result = parent::createMicrovmAuthToken($args->toArray());
        return new CreateMicrovmAuthTokenResponse($result->toArray());
    }
}
