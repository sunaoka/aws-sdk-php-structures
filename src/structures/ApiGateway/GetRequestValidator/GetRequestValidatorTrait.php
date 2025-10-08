<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetRequestValidator;

trait GetRequestValidatorTrait
{
    /**
     * @param GetRequestValidatorRequest $args
     * @return GetRequestValidatorResponse
     */
    public function getRequestValidator(GetRequestValidatorRequest $args)
    {
        $result = parent::getRequestValidator($args->toArray());
        return new GetRequestValidatorResponse($result->toArray());
    }
}
