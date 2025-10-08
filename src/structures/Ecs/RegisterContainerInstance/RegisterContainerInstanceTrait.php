<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterContainerInstance;

trait RegisterContainerInstanceTrait
{
    /**
     * @param RegisterContainerInstanceRequest $args
     * @return RegisterContainerInstanceResponse
     */
    public function registerContainerInstance(RegisterContainerInstanceRequest $args)
    {
        $result = parent::registerContainerInstance($args->toArray());
        return new RegisterContainerInstanceResponse($result->toArray());
    }
}
