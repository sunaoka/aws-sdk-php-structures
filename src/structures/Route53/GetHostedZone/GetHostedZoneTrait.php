<?php

namespace Sunaoka\Aws\Structures\Route53\GetHostedZone;

trait GetHostedZoneTrait
{
    /**
     * @param GetHostedZoneRequest $args
     * @return GetHostedZoneResponse
     */
    public function getHostedZone(GetHostedZoneRequest $args)
    {
        $result = parent::getHostedZone($args->toArray());
        return new GetHostedZoneResponse($result->toArray());
    }
}
