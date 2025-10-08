<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetConnectivityInfo;

trait GetConnectivityInfoTrait
{
    /**
     * @param GetConnectivityInfoRequest $args
     * @return GetConnectivityInfoResponse
     */
    public function getConnectivityInfo(GetConnectivityInfoRequest $args)
    {
        $result = parent::getConnectivityInfo($args->toArray());
        return new GetConnectivityInfoResponse($result->toArray());
    }
}
