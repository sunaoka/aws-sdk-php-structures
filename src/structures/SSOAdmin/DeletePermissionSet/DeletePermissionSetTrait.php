<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DeletePermissionSet;

trait DeletePermissionSetTrait
{
    /**
     * @param DeletePermissionSetRequest $args
     * @return DeletePermissionSetResponse
     */
    public function deletePermissionSet(DeletePermissionSetRequest $args)
    {
        $result = parent::deletePermissionSet($args->toArray());
        return new DeletePermissionSetResponse($result->toArray());
    }
}
