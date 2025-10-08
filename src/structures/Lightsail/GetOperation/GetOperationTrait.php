<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetOperation;

trait GetOperationTrait
{
    /**
     * @param GetOperationRequest $args
     * @return GetOperationResponse
     */
    public function getOperation(GetOperationRequest $args)
    {
        $result = parent::getOperation($args->toArray());
        return new GetOperationResponse($result->toArray());
    }
}
