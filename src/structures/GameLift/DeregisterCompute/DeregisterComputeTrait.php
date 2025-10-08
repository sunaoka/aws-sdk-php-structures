<?php

namespace Sunaoka\Aws\Structures\GameLift\DeregisterCompute;

trait DeregisterComputeTrait
{
    /**
     * @param DeregisterComputeRequest $args
     * @return DeregisterComputeResponse
     */
    public function deregisterCompute(DeregisterComputeRequest $args)
    {
        $result = parent::deregisterCompute($args->toArray());
        return new DeregisterComputeResponse($result->toArray());
    }
}
