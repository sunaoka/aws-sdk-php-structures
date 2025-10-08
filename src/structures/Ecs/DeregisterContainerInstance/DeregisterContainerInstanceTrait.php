<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterContainerInstance;

trait DeregisterContainerInstanceTrait
{
    /**
     * @param DeregisterContainerInstanceRequest $args
     * @return DeregisterContainerInstanceResponse
     */
    public function deregisterContainerInstance(DeregisterContainerInstanceRequest $args)
    {
        $result = parent::deregisterContainerInstance($args->toArray());
        return new DeregisterContainerInstanceResponse($result->toArray());
    }
}
