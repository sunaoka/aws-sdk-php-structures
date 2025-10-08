<?php

namespace Sunaoka\Aws\Structures\Neptune\CreateDBSubnetGroup;

trait CreateDBSubnetGroupTrait
{
    /**
     * @param CreateDBSubnetGroupRequest $args
     * @return CreateDBSubnetGroupResponse
     */
    public function createDBSubnetGroup(CreateDBSubnetGroupRequest $args)
    {
        $result = parent::createDBSubnetGroup($args->toArray());
        return new CreateDBSubnetGroupResponse($result->toArray());
    }
}
