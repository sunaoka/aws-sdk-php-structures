<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdateTrustedTokenIssuer;

trait UpdateTrustedTokenIssuerTrait
{
    /**
     * @param UpdateTrustedTokenIssuerRequest $args
     * @return UpdateTrustedTokenIssuerResponse
     */
    public function updateTrustedTokenIssuer(UpdateTrustedTokenIssuerRequest $args)
    {
        $result = parent::updateTrustedTokenIssuer($args->toArray());
        return new UpdateTrustedTokenIssuerResponse($result->toArray());
    }
}
