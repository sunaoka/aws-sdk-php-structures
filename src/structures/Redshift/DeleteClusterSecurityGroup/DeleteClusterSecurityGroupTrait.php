<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteClusterSecurityGroup;

trait DeleteClusterSecurityGroupTrait
{
    /**
     * @param DeleteClusterSecurityGroupRequest $args
     * @return void
     */
    public function deleteClusterSecurityGroup(DeleteClusterSecurityGroupRequest $args)
    {
        parent::deleteClusterSecurityGroup($args->toArray());
    }
}
