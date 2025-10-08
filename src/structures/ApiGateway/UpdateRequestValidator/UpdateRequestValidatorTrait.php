<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateRequestValidator;

trait UpdateRequestValidatorTrait
{
    /**
     * @param UpdateRequestValidatorRequest $args
     * @return UpdateRequestValidatorResponse
     */
    public function updateRequestValidator(UpdateRequestValidatorRequest $args)
    {
        $result = parent::updateRequestValidator($args->toArray());
        return new UpdateRequestValidatorResponse($result->toArray());
    }
}
