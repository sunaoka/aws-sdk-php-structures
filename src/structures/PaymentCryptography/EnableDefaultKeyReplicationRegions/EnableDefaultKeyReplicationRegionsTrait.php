<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\EnableDefaultKeyReplicationRegions;

trait EnableDefaultKeyReplicationRegionsTrait
{
    /**
     * @param EnableDefaultKeyReplicationRegionsRequest $args
     * @return EnableDefaultKeyReplicationRegionsResponse
     */
    public function enableDefaultKeyReplicationRegions(EnableDefaultKeyReplicationRegionsRequest $args)
    {
        $result = parent::enableDefaultKeyReplicationRegions($args->toArray());
        return new EnableDefaultKeyReplicationRegionsResponse($result->toArray());
    }
}
