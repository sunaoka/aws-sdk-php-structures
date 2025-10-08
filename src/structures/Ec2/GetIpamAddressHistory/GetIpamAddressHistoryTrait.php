<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamAddressHistory;

trait GetIpamAddressHistoryTrait
{
    /**
     * @param GetIpamAddressHistoryRequest $args
     * @return GetIpamAddressHistoryResponse
     */
    public function getIpamAddressHistory(GetIpamAddressHistoryRequest $args)
    {
        $result = parent::getIpamAddressHistory($args->toArray());
        return new GetIpamAddressHistoryResponse($result->toArray());
    }
}
