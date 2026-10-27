<?php

namespace Sunaoka\Aws\Structures\Signin\CreateOAuth2TokenWithTokenExchange;

trait CreateOAuth2TokenWithTokenExchangeTrait
{
    /**
     * @param CreateOAuth2TokenWithTokenExchangeRequest $args
     * @return CreateOAuth2TokenWithTokenExchangeResponse
     */
    public function createOAuth2TokenWithTokenExchange(CreateOAuth2TokenWithTokenExchangeRequest $args)
    {
        $result = parent::createOAuth2TokenWithTokenExchange($args->toArray());
        return new CreateOAuth2TokenWithTokenExchangeResponse($result->toArray());
    }
}
