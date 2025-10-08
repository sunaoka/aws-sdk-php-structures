<?php

namespace Sunaoka\Aws\Structures\Route53\CreateHostedZone;

trait CreateHostedZoneTrait
{
    /**
     * @param CreateHostedZoneRequest $args
     * @return CreateHostedZoneResponse
     */
    public function createHostedZone(CreateHostedZoneRequest $args)
    {
        $result = parent::createHostedZone($args->toArray());
        return new CreateHostedZoneResponse($result->toArray());
    }
}
