<?php

namespace Sunaoka\Aws\Structures\AppRegistry\DisassociateAttributeGroup;

trait DisassociateAttributeGroupTrait
{
    /**
     * @param DisassociateAttributeGroupRequest $args
     * @return DisassociateAttributeGroupResponse
     */
    public function disassociateAttributeGroup(DisassociateAttributeGroupRequest $args)
    {
        $result = parent::disassociateAttributeGroup($args->toArray());
        return new DisassociateAttributeGroupResponse($result->toArray());
    }
}
