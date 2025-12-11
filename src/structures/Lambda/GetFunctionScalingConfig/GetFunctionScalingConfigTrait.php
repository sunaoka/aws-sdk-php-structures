<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunctionScalingConfig;

trait GetFunctionScalingConfigTrait
{
    /**
     * @param GetFunctionScalingConfigRequest $args
     * @return GetFunctionScalingConfigResponse
     */
    public function getFunctionScalingConfig(GetFunctionScalingConfigRequest $args)
    {
        $result = parent::getFunctionScalingConfig($args->toArray());
        return new GetFunctionScalingConfigResponse($result->toArray());
    }
}
