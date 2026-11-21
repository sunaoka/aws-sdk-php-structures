<?php

namespace Sunaoka\Aws\Structures\Route53\GetHostedZoneChangeBatch;

trait GetHostedZoneChangeBatchTrait
{
    /**
     * @param GetHostedZoneChangeBatchRequest $args
     * @return GetHostedZoneChangeBatchResponse
     */
    public function getHostedZoneChangeBatch(GetHostedZoneChangeBatchRequest $args)
    {
        $result = parent::getHostedZoneChangeBatch($args->toArray());
        return new GetHostedZoneChangeBatchResponse($result->toArray());
    }
}
