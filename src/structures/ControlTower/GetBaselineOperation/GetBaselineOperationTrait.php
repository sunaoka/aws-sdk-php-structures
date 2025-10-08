<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetBaselineOperation;

trait GetBaselineOperationTrait
{
    /**
     * @param GetBaselineOperationRequest $args
     * @return GetBaselineOperationResponse
     */
    public function getBaselineOperation(GetBaselineOperationRequest $args)
    {
        $result = parent::getBaselineOperation($args->toArray());
        return new GetBaselineOperationResponse($result->toArray());
    }
}
