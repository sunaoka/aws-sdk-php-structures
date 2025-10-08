<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateRequestValidator;

trait CreateRequestValidatorTrait
{
    /**
     * @param CreateRequestValidatorRequest $args
     * @return CreateRequestValidatorResponse
     */
    public function createRequestValidator(CreateRequestValidatorRequest $args)
    {
        $result = parent::createRequestValidator($args->toArray());
        return new CreateRequestValidatorResponse($result->toArray());
    }
}
