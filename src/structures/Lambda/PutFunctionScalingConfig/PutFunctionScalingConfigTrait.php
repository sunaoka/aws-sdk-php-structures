<?php

namespace Sunaoka\Aws\Structures\Lambda\PutFunctionScalingConfig;

trait PutFunctionScalingConfigTrait
{
    /**
     * @param PutFunctionScalingConfigRequest $args
     * @return PutFunctionScalingConfigResponse
     */
    public function putFunctionScalingConfig(PutFunctionScalingConfigRequest $args)
    {
        $result = parent::putFunctionScalingConfig($args->toArray());
        return new PutFunctionScalingConfigResponse($result->toArray());
    }
}
