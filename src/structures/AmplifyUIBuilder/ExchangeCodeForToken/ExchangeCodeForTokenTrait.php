<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ExchangeCodeForToken;

trait ExchangeCodeForTokenTrait
{
    /**
     * @param ExchangeCodeForTokenRequest $args
     * @return ExchangeCodeForTokenResponse
     */
    public function exchangeCodeForToken(ExchangeCodeForTokenRequest $args)
    {
        $result = parent::exchangeCodeForToken($args->toArray());
        return new ExchangeCodeForTokenResponse($result->toArray());
    }
}
