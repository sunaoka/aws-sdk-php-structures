<?php

namespace Sunaoka\Aws\Structures\Waf\GetRateBasedRuleManagedKeys;

trait GetRateBasedRuleManagedKeysTrait
{
    /**
     * @param GetRateBasedRuleManagedKeysRequest $args
     * @return GetRateBasedRuleManagedKeysResponse
     */
    public function getRateBasedRuleManagedKeys(GetRateBasedRuleManagedKeysRequest $args)
    {
        $result = parent::getRateBasedRuleManagedKeys($args->toArray());
        return new GetRateBasedRuleManagedKeysResponse($result->toArray());
    }
}
