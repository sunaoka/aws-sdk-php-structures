<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateConnectivityInfo;

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
