<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetConnectivityInfo;

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
