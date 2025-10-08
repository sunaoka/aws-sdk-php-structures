<?php

namespace Sunaoka\Aws\Structures\GameLift\GetComputeAccess;

trait GetComputeAccessTrait
{
    /**
     * @param GetComputeAccessRequest $args
     * @return GetComputeAccessResponse
     */
    public function getComputeAccess(GetComputeAccessRequest $args)
    {
        $result = parent::getComputeAccess($args->toArray());
        return new GetComputeAccessResponse($result->toArray());
    }
}
