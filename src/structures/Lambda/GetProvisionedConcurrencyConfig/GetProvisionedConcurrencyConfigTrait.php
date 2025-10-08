<?php

namespace Sunaoka\Aws\Structures\Lambda\GetProvisionedConcurrencyConfig;

trait GetProvisionedConcurrencyConfigTrait
{
    /**
     * @param GetProvisionedConcurrencyConfigRequest $args
     * @return GetProvisionedConcurrencyConfigResponse
     */
    public function getProvisionedConcurrencyConfig(GetProvisionedConcurrencyConfigRequest $args)
    {
        $result = parent::getProvisionedConcurrencyConfig($args->toArray());
        return new GetProvisionedConcurrencyConfigResponse($result->toArray());
    }
}
