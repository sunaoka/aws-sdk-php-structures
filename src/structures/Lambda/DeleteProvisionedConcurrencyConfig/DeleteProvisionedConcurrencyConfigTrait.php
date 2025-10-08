<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteProvisionedConcurrencyConfig;

trait DeleteProvisionedConcurrencyConfigTrait
{
    /**
     * @param DeleteProvisionedConcurrencyConfigRequest $args
     * @return void
     */
    public function deleteProvisionedConcurrencyConfig(DeleteProvisionedConcurrencyConfigRequest $args)
    {
        parent::deleteProvisionedConcurrencyConfig($args->toArray());
    }
}
