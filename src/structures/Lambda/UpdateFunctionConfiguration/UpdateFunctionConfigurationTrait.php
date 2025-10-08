<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionConfiguration;

trait UpdateFunctionConfigurationTrait
{
    /**
     * @param UpdateFunctionConfigurationRequest $args
     * @return UpdateFunctionConfigurationResponse
     */
    public function updateFunctionConfiguration(UpdateFunctionConfigurationRequest $args)
    {
        $result = parent::updateFunctionConfiguration($args->toArray());
        return new UpdateFunctionConfigurationResponse($result->toArray());
    }
}
