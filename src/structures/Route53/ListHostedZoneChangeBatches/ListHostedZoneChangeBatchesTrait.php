<?php

namespace Sunaoka\Aws\Structures\Route53\ListHostedZoneChangeBatches;

trait ListHostedZoneChangeBatchesTrait
{
    /**
     * @param ListHostedZoneChangeBatchesRequest $args
     * @return ListHostedZoneChangeBatchesResponse
     */
    public function listHostedZoneChangeBatches(ListHostedZoneChangeBatchesRequest $args)
    {
        $result = parent::listHostedZoneChangeBatches($args->toArray());
        return new ListHostedZoneChangeBatchesResponse($result->toArray());
    }
}
