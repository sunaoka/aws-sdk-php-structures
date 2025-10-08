<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\StopKeyUsage;

trait StopKeyUsageTrait
{
    /**
     * @param StopKeyUsageRequest $args
     * @return StopKeyUsageResponse
     */
    public function stopKeyUsage(StopKeyUsageRequest $args)
    {
        $result = parent::stopKeyUsage($args->toArray());
        return new StopKeyUsageResponse($result->toArray());
    }
}
