<?php

namespace Sunaoka\Aws\Structures\RAM\ListReplacePermissionAssociationsWork;

trait ListReplacePermissionAssociationsWorkTrait
{
    /**
     * @param ListReplacePermissionAssociationsWorkRequest $args
     * @return ListReplacePermissionAssociationsWorkResponse
     */
    public function listReplacePermissionAssociationsWork(ListReplacePermissionAssociationsWorkRequest $args)
    {
        $result = parent::listReplacePermissionAssociationsWork($args->toArray());
        return new ListReplacePermissionAssociationsWorkResponse($result->toArray());
    }
}
