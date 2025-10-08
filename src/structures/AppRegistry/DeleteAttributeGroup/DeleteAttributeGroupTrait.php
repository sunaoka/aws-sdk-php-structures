<?php

namespace Sunaoka\Aws\Structures\AppRegistry\DeleteAttributeGroup;

trait DeleteAttributeGroupTrait
{
    /**
     * @param DeleteAttributeGroupRequest $args
     * @return DeleteAttributeGroupResponse
     */
    public function deleteAttributeGroup(DeleteAttributeGroupRequest $args)
    {
        $result = parent::deleteAttributeGroup($args->toArray());
        return new DeleteAttributeGroupResponse($result->toArray());
    }
}
