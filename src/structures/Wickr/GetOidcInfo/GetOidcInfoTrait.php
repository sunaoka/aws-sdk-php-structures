<?php

namespace Sunaoka\Aws\Structures\Wickr\GetOidcInfo;

trait GetOidcInfoTrait
{
    /**
     * @param GetOidcInfoRequest $args
     * @return GetOidcInfoResponse
     */
    public function getOidcInfo(GetOidcInfoRequest $args)
    {
        $result = parent::getOidcInfo($args->toArray());
        return new GetOidcInfoResponse($result->toArray());
    }
}
