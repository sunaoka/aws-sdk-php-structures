<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBSubnetGroup;

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
