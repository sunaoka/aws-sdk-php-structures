<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeTrustedTokenIssuer;

trait DescribeTrustedTokenIssuerTrait
{
    /**
     * @param DescribeTrustedTokenIssuerRequest $args
     * @return DescribeTrustedTokenIssuerResponse
     */
    public function describeTrustedTokenIssuer(DescribeTrustedTokenIssuerRequest $args)
    {
        $result = parent::describeTrustedTokenIssuer($args->toArray());
        return new DescribeTrustedTokenIssuerResponse($result->toArray());
    }
}
