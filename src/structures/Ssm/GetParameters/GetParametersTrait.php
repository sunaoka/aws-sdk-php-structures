<?php

namespace Sunaoka\Aws\Structures\Ssm\GetParameters;

trait GetParametersTrait
{
    /**
     * @param GetParametersRequest $args
     * @return GetParametersResponse
     */
    public function getParameters(GetParametersRequest $args)
    {
        $result = parent::getParameters($args->toArray());
        return new GetParametersResponse($result->toArray());
    }
}
