<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeleteMailboxPermissions;

trait DeleteMailboxPermissionsTrait
{
    /**
     * @param DeleteMailboxPermissionsRequest $args
     * @return DeleteMailboxPermissionsResponse
     */
    public function deleteMailboxPermissions(DeleteMailboxPermissionsRequest $args)
    {
        $result = parent::deleteMailboxPermissions($args->toArray());
        return new DeleteMailboxPermissionsResponse($result->toArray());
    }
}
