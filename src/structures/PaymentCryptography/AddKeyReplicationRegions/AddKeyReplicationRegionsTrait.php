<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\AddKeyReplicationRegions;

trait AddKeyReplicationRegionsTrait
{
    /**
     * @param AddKeyReplicationRegionsRequest $args
     * @return AddKeyReplicationRegionsResponse
     */
    public function addKeyReplicationRegions(AddKeyReplicationRegionsRequest $args)
    {
        $result = parent::addKeyReplicationRegions($args->toArray());
        return new AddKeyReplicationRegionsResponse($result->toArray());
    }
}
