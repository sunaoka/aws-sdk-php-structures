<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\PutPermissionsBoundaryToPermissionSet;

trait PutPermissionsBoundaryToPermissionSetTrait
{
    /**
     * @param PutPermissionsBoundaryToPermissionSetRequest $args
     * @return PutPermissionsBoundaryToPermissionSetResponse
     */
    public function putPermissionsBoundaryToPermissionSet(PutPermissionsBoundaryToPermissionSetRequest $args)
    {
        $result = parent::putPermissionsBoundaryToPermissionSet($args->toArray());
        return new PutPermissionsBoundaryToPermissionSetResponse($result->toArray());
    }
}
