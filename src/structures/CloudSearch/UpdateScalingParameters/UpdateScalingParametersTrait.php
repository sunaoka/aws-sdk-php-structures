<?php

namespace Sunaoka\Aws\Structures\CloudSearch\UpdateScalingParameters;

trait UpdateScalingParametersTrait
{
    /**
     * @param UpdateScalingParametersRequest $args
     * @return UpdateScalingParametersResponse
     */
    public function updateScalingParameters(UpdateScalingParametersRequest $args)
    {
        $result = parent::updateScalingParameters($args->toArray());
        return new UpdateScalingParametersResponse($result->toArray());
    }
}
