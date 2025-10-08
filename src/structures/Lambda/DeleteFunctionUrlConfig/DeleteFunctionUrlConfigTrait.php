<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteFunctionUrlConfig;

trait DeleteFunctionUrlConfigTrait
{
    /**
     * @param DeleteFunctionUrlConfigRequest $args
     * @return void
     */
    public function deleteFunctionUrlConfig(DeleteFunctionUrlConfigRequest $args)
    {
        parent::deleteFunctionUrlConfig($args->toArray());
    }
}
