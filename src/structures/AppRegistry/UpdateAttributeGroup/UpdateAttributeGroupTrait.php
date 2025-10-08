<?php

namespace Sunaoka\Aws\Structures\AppRegistry\UpdateAttributeGroup;

trait UpdateAttributeGroupTrait
{
    /**
     * @param UpdateAttributeGroupRequest $args
     * @return UpdateAttributeGroupResponse
     */
    public function updateAttributeGroup(UpdateAttributeGroupRequest $args)
    {
        $result = parent::updateAttributeGroup($args->toArray());
        return new UpdateAttributeGroupResponse($result->toArray());
    }
}
