<?php

namespace Sunaoka\Aws\Structures\DocDB\ModifyDBSubnetGroup;

trait ModifyDBSubnetGroupTrait
{
    /**
     * @param ModifyDBSubnetGroupRequest $args
     * @return ModifyDBSubnetGroupResponse
     */
    public function modifyDBSubnetGroup(ModifyDBSubnetGroupRequest $args)
    {
        $result = parent::modifyDBSubnetGroup($args->toArray());
        return new ModifyDBSubnetGroupResponse($result->toArray());
    }
}
