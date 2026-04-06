<?php

namespace Sunaoka\Aws\Structures\PCS\RegisterComputeNodeGroupInstance;

trait RegisterComputeNodeGroupInstanceTrait
{
    /**
     * @param RegisterComputeNodeGroupInstanceRequest $args
     * @return RegisterComputeNodeGroupInstanceResponse
     */
    public function registerComputeNodeGroupInstance(RegisterComputeNodeGroupInstanceRequest $args)
    {
        $result = parent::registerComputeNodeGroupInstance($args->toArray());
        return new RegisterComputeNodeGroupInstanceResponse($result->toArray());
    }
}
