<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunctionConfiguration;

trait GetFunctionConfigurationTrait
{
    /**
     * @param GetFunctionConfigurationRequest $args
     * @return GetFunctionConfigurationResponse
     */
    public function getFunctionConfiguration(GetFunctionConfigurationRequest $args)
    {
        $result = parent::getFunctionConfiguration($args->toArray());
        return new GetFunctionConfigurationResponse($result->toArray());
    }
}
