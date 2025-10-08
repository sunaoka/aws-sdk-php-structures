<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListTrustedTokenIssuers;

trait ListTrustedTokenIssuersTrait
{
    /**
     * @param ListTrustedTokenIssuersRequest $args
     * @return ListTrustedTokenIssuersResponse
     */
    public function listTrustedTokenIssuers(ListTrustedTokenIssuersRequest $args)
    {
        $result = parent::listTrustedTokenIssuers($args->toArray());
        return new ListTrustedTokenIssuersResponse($result->toArray());
    }
}
