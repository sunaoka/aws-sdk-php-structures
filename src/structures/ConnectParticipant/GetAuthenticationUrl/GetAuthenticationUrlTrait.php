<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\GetAuthenticationUrl;

trait GetAuthenticationUrlTrait
{
    /**
     * @param GetAuthenticationUrlRequest $args
     * @return GetAuthenticationUrlResponse
     */
    public function getAuthenticationUrl(GetAuthenticationUrlRequest $args)
    {
        $result = parent::getAuthenticationUrl($args->toArray());
        return new GetAuthenticationUrlResponse($result->toArray());
    }
}
