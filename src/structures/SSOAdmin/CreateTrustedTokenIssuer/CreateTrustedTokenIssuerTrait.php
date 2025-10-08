<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\CreateTrustedTokenIssuer;

trait CreateTrustedTokenIssuerTrait
{
    /**
     * @param CreateTrustedTokenIssuerRequest $args
     * @return CreateTrustedTokenIssuerResponse
     */
    public function createTrustedTokenIssuer(CreateTrustedTokenIssuerRequest $args)
    {
        $result = parent::createTrustedTokenIssuer($args->toArray());
        return new CreateTrustedTokenIssuerResponse($result->toArray());
    }
}
