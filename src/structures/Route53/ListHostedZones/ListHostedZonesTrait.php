<?php

namespace Sunaoka\Aws\Structures\Route53\ListHostedZones;

trait ListHostedZonesTrait
{
    /**
     * @param ListHostedZonesRequest $args
     * @return ListHostedZonesResponse
     */
    public function listHostedZones(ListHostedZonesRequest $args)
    {
        $result = parent::listHostedZones($args->toArray());
        return new ListHostedZonesResponse($result->toArray());
    }
}
