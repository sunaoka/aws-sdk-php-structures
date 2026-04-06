<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListAccessTokens;

trait ListAccessTokensTrait
{
    /**
     * @param ListAccessTokensRequest $args
     * @return ListAccessTokensResponse
     */
    public function listAccessTokens(ListAccessTokensRequest $args)
    {
        $result = parent::listAccessTokens($args->toArray());
        return new ListAccessTokensResponse($result->toArray());
    }
}
