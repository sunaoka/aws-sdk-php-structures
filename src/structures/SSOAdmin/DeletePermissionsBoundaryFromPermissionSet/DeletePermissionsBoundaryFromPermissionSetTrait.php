<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DeletePermissionsBoundaryFromPermissionSet;

trait DeletePermissionsBoundaryFromPermissionSetTrait
{
    /**
     * @param DeletePermissionsBoundaryFromPermissionSetRequest $args
     * @return DeletePermissionsBoundaryFromPermissionSetResponse
     */
    public function deletePermissionsBoundaryFromPermissionSet(DeletePermissionsBoundaryFromPermissionSetRequest $args)
    {
        $result = parent::deletePermissionsBoundaryFromPermissionSet($args->toArray());
        return new DeletePermissionsBoundaryFromPermissionSetResponse($result->toArray());
    }
}
