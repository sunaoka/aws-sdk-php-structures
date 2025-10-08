<?php

namespace Sunaoka\Aws\Structures\Route53\DisableHostedZoneDNSSEC;

trait DisableHostedZoneDNSSECTrait
{
    /**
     * @param DisableHostedZoneDNSSECRequest $args
     * @return DisableHostedZoneDNSSECResponse
     */
    public function disableHostedZoneDNSSEC(DisableHostedZoneDNSSECRequest $args)
    {
        $result = parent::disableHostedZoneDNSSEC($args->toArray());
        return new DisableHostedZoneDNSSECResponse($result->toArray());
    }
}
