<?php

namespace Sunaoka\Aws\Structures\Lambda\ListProvisionedConcurrencyConfigs;

trait ListProvisionedConcurrencyConfigsTrait
{
    /**
     * @param ListProvisionedConcurrencyConfigsRequest $args
     * @return ListProvisionedConcurrencyConfigsResponse
     */
    public function listProvisionedConcurrencyConfigs(ListProvisionedConcurrencyConfigsRequest $args)
    {
        $result = parent::listProvisionedConcurrencyConfigs($args->toArray());
        return new ListProvisionedConcurrencyConfigsResponse($result->toArray());
    }
}
