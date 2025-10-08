<?php

namespace Sunaoka\Aws\Structures\Route53\GetHostedZoneCount;

trait GetHostedZoneCountTrait
{
    /**
     * @param GetHostedZoneCountRequest $args
     * @return GetHostedZoneCountResponse
     */
    public function getHostedZoneCount(GetHostedZoneCountRequest $args)
    {
        $result = parent::getHostedZoneCount($args->toArray());
        return new GetHostedZoneCountResponse($result->toArray());
    }
}
