<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\StartKeyUsage;

trait StartKeyUsageTrait
{
    /**
     * @param StartKeyUsageRequest $args
     * @return StartKeyUsageResponse
     */
    public function startKeyUsage(StartKeyUsageRequest $args)
    {
        $result = parent::startKeyUsage($args->toArray());
        return new StartKeyUsageResponse($result->toArray());
    }
}
