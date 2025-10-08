<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\GetDefaultKeyReplicationRegions;

trait GetDefaultKeyReplicationRegionsTrait
{
    /**
     * @param GetDefaultKeyReplicationRegionsRequest $args
     * @return GetDefaultKeyReplicationRegionsResponse
     */
    public function getDefaultKeyReplicationRegions(GetDefaultKeyReplicationRegionsRequest $args)
    {
        $result = parent::getDefaultKeyReplicationRegions($args->toArray());
        return new GetDefaultKeyReplicationRegionsResponse($result->toArray());
    }
}
