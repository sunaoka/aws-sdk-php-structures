<?php

namespace Sunaoka\Aws\Structures\GameLift\ListCompute;

trait ListComputeTrait
{
    /**
     * @param ListComputeRequest $args
     * @return ListComputeResponse
     */
    public function listCompute(ListComputeRequest $args)
    {
        $result = parent::listCompute($args->toArray());
        return new ListComputeResponse($result->toArray());
    }
}
