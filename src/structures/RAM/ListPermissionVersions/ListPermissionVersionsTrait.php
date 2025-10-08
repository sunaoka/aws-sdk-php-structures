<?php

namespace Sunaoka\Aws\Structures\RAM\ListPermissionVersions;

trait ListPermissionVersionsTrait
{
    /**
     * @param ListPermissionVersionsRequest $args
     * @return ListPermissionVersionsResponse
     */
    public function listPermissionVersions(ListPermissionVersionsRequest $args)
    {
        $result = parent::listPermissionVersions($args->toArray());
        return new ListPermissionVersionsResponse($result->toArray());
    }
}
