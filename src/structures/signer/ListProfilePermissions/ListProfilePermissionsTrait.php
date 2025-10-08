<?php

namespace Sunaoka\Aws\Structures\signer\ListProfilePermissions;

trait ListProfilePermissionsTrait
{
    /**
     * @param ListProfilePermissionsRequest $args
     * @return ListProfilePermissionsResponse
     */
    public function listProfilePermissions(ListProfilePermissionsRequest $args)
    {
        $result = parent::listProfilePermissions($args->toArray());
        return new ListProfilePermissionsResponse($result->toArray());
    }
}
