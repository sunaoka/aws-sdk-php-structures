<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteFunctionCodeSigningConfig;

trait DeleteFunctionCodeSigningConfigTrait
{
    /**
     * @param DeleteFunctionCodeSigningConfigRequest $args
     * @return void
     */
    public function deleteFunctionCodeSigningConfig(DeleteFunctionCodeSigningConfigRequest $args)
    {
        parent::deleteFunctionCodeSigningConfig($args->toArray());
    }
}
