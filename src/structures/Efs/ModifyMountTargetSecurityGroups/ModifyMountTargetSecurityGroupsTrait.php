<?php

namespace Sunaoka\Aws\Structures\Efs\ModifyMountTargetSecurityGroups;

trait ModifyMountTargetSecurityGroupsTrait
{
    /**
     * @param ModifyMountTargetSecurityGroupsRequest $args
     * @return void
     */
    public function modifyMountTargetSecurityGroups(ModifyMountTargetSecurityGroupsRequest $args)
    {
        parent::modifyMountTargetSecurityGroups($args->toArray());
    }
}
