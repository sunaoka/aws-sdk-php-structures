<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DeleteTrustedTokenIssuer;

trait DeleteTrustedTokenIssuerTrait
{
    /**
     * @param DeleteTrustedTokenIssuerRequest $args
     * @return DeleteTrustedTokenIssuerResponse
     */
    public function deleteTrustedTokenIssuer(DeleteTrustedTokenIssuerRequest $args)
    {
        $result = parent::deleteTrustedTokenIssuer($args->toArray());
        return new DeleteTrustedTokenIssuerResponse($result->toArray());
    }
}
