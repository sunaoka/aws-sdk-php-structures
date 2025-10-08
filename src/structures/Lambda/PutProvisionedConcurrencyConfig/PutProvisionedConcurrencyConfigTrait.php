<?php

namespace Sunaoka\Aws\Structures\Lambda\PutProvisionedConcurrencyConfig;

trait PutProvisionedConcurrencyConfigTrait
{
    /**
     * @param PutProvisionedConcurrencyConfigRequest $args
     * @return PutProvisionedConcurrencyConfigResponse
     */
    public function putProvisionedConcurrencyConfig(PutProvisionedConcurrencyConfigRequest $args)
    {
        $result = parent::putProvisionedConcurrencyConfig($args->toArray());
        return new PutProvisionedConcurrencyConfigResponse($result->toArray());
    }
}
