<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\RemoveKeyReplicationRegions;

trait RemoveKeyReplicationRegionsTrait
{
    /**
     * @param RemoveKeyReplicationRegionsRequest $args
     * @return RemoveKeyReplicationRegionsResponse
     */
    public function removeKeyReplicationRegions(RemoveKeyReplicationRegionsRequest $args)
    {
        $result = parent::removeKeyReplicationRegions($args->toArray());
        return new RemoveKeyReplicationRegionsResponse($result->toArray());
    }
}
