<?php

namespace Sunaoka\Aws\Structures\AppRegistry\CreateAttributeGroup;

trait CreateAttributeGroupTrait
{
    /**
     * @param CreateAttributeGroupRequest $args
     * @return CreateAttributeGroupResponse
     */
    public function createAttributeGroup(CreateAttributeGroupRequest $args)
    {
        $result = parent::createAttributeGroup($args->toArray());
        return new CreateAttributeGroupResponse($result->toArray());
    }
}
