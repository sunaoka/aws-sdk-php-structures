<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionUrlConfig;

trait UpdateFunctionUrlConfigTrait
{
    /**
     * @param UpdateFunctionUrlConfigRequest $args
     * @return UpdateFunctionUrlConfigResponse
     */
    public function updateFunctionUrlConfig(UpdateFunctionUrlConfigRequest $args)
    {
        $result = parent::updateFunctionUrlConfig($args->toArray());
        return new UpdateFunctionUrlConfigResponse($result->toArray());
    }
}
