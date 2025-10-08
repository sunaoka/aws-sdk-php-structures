<?php

namespace Sunaoka\Aws\Structures\AppRegistry\GetAttributeGroup;

trait GetAttributeGroupTrait
{
    /**
     * @param GetAttributeGroupRequest $args
     * @return GetAttributeGroupResponse
     */
    public function getAttributeGroup(GetAttributeGroupRequest $args)
    {
        $result = parent::getAttributeGroup($args->toArray());
        return new GetAttributeGroupResponse($result->toArray());
    }
}
