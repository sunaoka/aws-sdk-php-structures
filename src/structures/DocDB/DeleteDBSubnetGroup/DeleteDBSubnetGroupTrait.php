<?php

namespace Sunaoka\Aws\Structures\DocDB\DeleteDBSubnetGroup;

trait DeleteDBSubnetGroupTrait
{
    /**
     * @param DeleteDBSubnetGroupRequest $args
     * @return void
     */
    public function deleteDBSubnetGroup(DeleteDBSubnetGroupRequest $args)
    {
        parent::deleteDBSubnetGroup($args->toArray());
    }
}
