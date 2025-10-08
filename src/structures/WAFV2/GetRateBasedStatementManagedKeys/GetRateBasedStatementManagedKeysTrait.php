<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRateBasedStatementManagedKeys;

trait GetRateBasedStatementManagedKeysTrait
{
    /**
     * @param GetRateBasedStatementManagedKeysRequest $args
     * @return GetRateBasedStatementManagedKeysResponse
     */
    public function getRateBasedStatementManagedKeys(GetRateBasedStatementManagedKeysRequest $args)
    {
        $result = parent::getRateBasedStatementManagedKeys($args->toArray());
        return new GetRateBasedStatementManagedKeysResponse($result->toArray());
    }
}
