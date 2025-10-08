<?php

namespace Sunaoka\Aws\Structures\Route53\ListHostedZonesByVPC;

trait ListHostedZonesByVPCTrait
{
    /**
     * @param ListHostedZonesByVPCRequest $args
     * @return ListHostedZonesByVPCResponse
     */
    public function listHostedZonesByVPC(ListHostedZonesByVPCRequest $args)
    {
        $result = parent::listHostedZonesByVPC($args->toArray());
        return new ListHostedZonesByVPCResponse($result->toArray());
    }
}
