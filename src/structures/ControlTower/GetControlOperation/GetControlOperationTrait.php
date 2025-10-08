<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetControlOperation;

trait GetControlOperationTrait
{
    /**
     * @param GetControlOperationRequest $args
     * @return GetControlOperationResponse
     */
    public function getControlOperation(GetControlOperationRequest $args)
    {
        $result = parent::getControlOperation($args->toArray());
        return new GetControlOperationResponse($result->toArray());
    }
}
