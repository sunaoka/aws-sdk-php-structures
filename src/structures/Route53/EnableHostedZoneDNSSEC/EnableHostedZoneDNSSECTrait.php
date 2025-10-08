<?php

namespace Sunaoka\Aws\Structures\Route53\EnableHostedZoneDNSSEC;

trait EnableHostedZoneDNSSECTrait
{
    /**
     * @param EnableHostedZoneDNSSECRequest $args
     * @return EnableHostedZoneDNSSECResponse
     */
    public function enableHostedZoneDNSSEC(EnableHostedZoneDNSSECRequest $args)
    {
        $result = parent::enableHostedZoneDNSSEC($args->toArray());
        return new EnableHostedZoneDNSSECResponse($result->toArray());
    }
}
