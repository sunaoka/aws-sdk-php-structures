<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\GetPermissionsBoundaryForPermissionSet;

trait GetPermissionsBoundaryForPermissionSetTrait
{
    /**
     * @param GetPermissionsBoundaryForPermissionSetRequest $args
     * @return GetPermissionsBoundaryForPermissionSetResponse
     */
    public function getPermissionsBoundaryForPermissionSet(GetPermissionsBoundaryForPermissionSetRequest $args)
    {
        $result = parent::getPermissionsBoundaryForPermissionSet($args->toArray());
        return new GetPermissionsBoundaryForPermissionSetResponse($result->toArray());
    }
}
