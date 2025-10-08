<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteClusterSubnetGroup;

trait DeleteClusterSubnetGroupTrait
{
    /**
     * @param DeleteClusterSubnetGroupRequest $args
     * @return void
     */
    public function deleteClusterSubnetGroup(DeleteClusterSubnetGroupRequest $args)
    {
        parent::deleteClusterSubnetGroup($args->toArray());
    }
}
