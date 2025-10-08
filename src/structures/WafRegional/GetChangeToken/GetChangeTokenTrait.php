<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetChangeToken;

trait GetChangeTokenTrait
{
    /**
     * @param GetChangeTokenRequest $args
     * @return GetChangeTokenResponse
     */
    public function getChangeToken(GetChangeTokenRequest $args)
    {
        $result = parent::getChangeToken($args->toArray());
        return new GetChangeTokenResponse($result->toArray());
    }
}
