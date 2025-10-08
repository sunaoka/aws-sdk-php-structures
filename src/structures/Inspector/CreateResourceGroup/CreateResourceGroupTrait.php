<?php

namespace Sunaoka\Aws\Structures\Inspector\CreateResourceGroup;

trait CreateResourceGroupTrait
{
    /**
     * @param CreateResourceGroupRequest $args
     * @return CreateResourceGroupResponse
     */
    public function createResourceGroup(CreateResourceGroupRequest $args)
    {
        $result = parent::createResourceGroup($args->toArray());
        return new CreateResourceGroupResponse($result->toArray());
    }
}
