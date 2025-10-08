<?php

namespace Sunaoka\Aws\Structures\Ssm\GetParameter;

trait GetParameterTrait
{
    /**
     * @param GetParameterRequest $args
     * @return GetParameterResponse
     */
    public function getParameter(GetParameterRequest $args)
    {
        $result = parent::getParameter($args->toArray());
        return new GetParameterResponse($result->toArray());
    }
}
