<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListPersonalAccessTokens;

trait ListPersonalAccessTokensTrait
{
    /**
     * @param ListPersonalAccessTokensRequest $args
     * @return ListPersonalAccessTokensResponse
     */
    public function listPersonalAccessTokens(ListPersonalAccessTokensRequest $args)
    {
        $result = parent::listPersonalAccessTokens($args->toArray());
        return new ListPersonalAccessTokensResponse($result->toArray());
    }
}
