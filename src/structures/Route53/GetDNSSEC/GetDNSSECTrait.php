<?php

namespace Sunaoka\Aws\Structures\Route53\GetDNSSEC;

trait GetDNSSECTrait
{
    /**
     * @param GetDNSSECRequest $args
     * @return GetDNSSECResponse
     */
    public function getDNSSEC(GetDNSSECRequest $args)
    {
        $result = parent::getDNSSEC($args->toArray());
        return new GetDNSSECResponse($result->toArray());
    }
}
