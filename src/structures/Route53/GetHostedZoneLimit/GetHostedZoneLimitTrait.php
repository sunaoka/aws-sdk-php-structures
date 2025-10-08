<?php

namespace Sunaoka\Aws\Structures\Route53\GetHostedZoneLimit;

trait GetHostedZoneLimitTrait
{
    /**
     * @param GetHostedZoneLimitRequest $args
     * @return GetHostedZoneLimitResponse
     */
    public function getHostedZoneLimit(GetHostedZoneLimitRequest $args)
    {
        $result = parent::getHostedZoneLimit($args->toArray());
        return new GetHostedZoneLimitResponse($result->toArray());
    }
}
