<?php

namespace Sunaoka\Aws\Structures\GameLift\RegisterCompute;

trait RegisterComputeTrait
{
    /**
     * @param RegisterComputeRequest $args
     * @return RegisterComputeResponse
     */
    public function registerCompute(RegisterComputeRequest $args)
    {
        $result = parent::registerCompute($args->toArray());
        return new RegisterComputeResponse($result->toArray());
    }
}
