<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteFunctionEventInvokeConfig;

trait DeleteFunctionEventInvokeConfigTrait
{
    /**
     * @param DeleteFunctionEventInvokeConfigRequest $args
     * @return void
     */
    public function deleteFunctionEventInvokeConfig(DeleteFunctionEventInvokeConfigRequest $args)
    {
        parent::deleteFunctionEventInvokeConfig($args->toArray());
    }
}
