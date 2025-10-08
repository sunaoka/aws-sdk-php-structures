<?php

namespace Sunaoka\Aws\Structures\AppRegistry\AssociateAttributeGroup;

trait AssociateAttributeGroupTrait
{
    /**
     * @param AssociateAttributeGroupRequest $args
     * @return AssociateAttributeGroupResponse
     */
    public function associateAttributeGroup(AssociateAttributeGroupRequest $args)
    {
        $result = parent::associateAttributeGroup($args->toArray());
        return new AssociateAttributeGroupResponse($result->toArray());
    }
}
