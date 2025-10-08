<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListMailboxPermissions;

trait ListMailboxPermissionsTrait
{
    /**
     * @param ListMailboxPermissionsRequest $args
     * @return ListMailboxPermissionsResponse
     */
    public function listMailboxPermissions(ListMailboxPermissionsRequest $args)
    {
        $result = parent::listMailboxPermissions($args->toArray());
        return new ListMailboxPermissionsResponse($result->toArray());
    }
}
