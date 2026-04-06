<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\DisableDefaultKeyReplicationRegions;

trait DisableDefaultKeyReplicationRegionsTrait
{
    /**
     * @param DisableDefaultKeyReplicationRegionsRequest $args
     * @return DisableDefaultKeyReplicationRegionsResponse
     */
    public function disableDefaultKeyReplicationRegions(DisableDefaultKeyReplicationRegionsRequest $args)
    {
        $result = parent::disableDefaultKeyReplicationRegions($args->toArray());
        return new DisableDefaultKeyReplicationRegionsResponse($result->toArray());
    }
}
