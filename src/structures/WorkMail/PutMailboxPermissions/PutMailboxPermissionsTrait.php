<?php

namespace Sunaoka\Aws\Structures\WorkMail\PutMailboxPermissions;

trait PutMailboxPermissionsTrait
{
    /**
     * @param PutMailboxPermissionsRequest $args
     * @return PutMailboxPermissionsResponse
     */
    public function putMailboxPermissions(PutMailboxPermissionsRequest $args)
    {
        $result = parent::putMailboxPermissions($args->toArray());
        return new PutMailboxPermissionsResponse($result->toArray());
    }
}
