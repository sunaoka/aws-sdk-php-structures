<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionEventInvokeConfig;

trait UpdateFunctionEventInvokeConfigTrait
{
    /**
     * @param UpdateFunctionEventInvokeConfigRequest $args
     * @return UpdateFunctionEventInvokeConfigResponse
     */
    public function updateFunctionEventInvokeConfig(UpdateFunctionEventInvokeConfigRequest $args)
    {
        $result = parent::updateFunctionEventInvokeConfig($args->toArray());
        return new UpdateFunctionEventInvokeConfigResponse($result->toArray());
    }
}
