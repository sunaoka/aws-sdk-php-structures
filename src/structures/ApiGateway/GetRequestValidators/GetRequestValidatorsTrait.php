<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetRequestValidators;

trait GetRequestValidatorsTrait
{
    /**
     * @param GetRequestValidatorsRequest $args
     * @return GetRequestValidatorsResponse
     */
    public function getRequestValidators(GetRequestValidatorsRequest $args)
    {
        $result = parent::getRequestValidators($args->toArray());
        return new GetRequestValidatorsResponse($result->toArray());
    }
}
