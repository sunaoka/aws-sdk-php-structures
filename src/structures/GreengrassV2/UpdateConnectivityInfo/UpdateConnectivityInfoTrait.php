<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\UpdateConnectivityInfo;

trait UpdateConnectivityInfoTrait
{
    /**
     * @param UpdateConnectivityInfoRequest $args
     * @return UpdateConnectivityInfoResponse
     */
    public function updateConnectivityInfo(UpdateConnectivityInfoRequest $args)
    {
        $result = parent::updateConnectivityInfo($args->toArray());
        return new UpdateConnectivityInfoResponse($result->toArray());
    }
}
