<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\CreatePermissionSet;

trait CreatePermissionSetTrait
{
    /**
     * @param CreatePermissionSetRequest $args
     * @return CreatePermissionSetResponse
     */
    public function createPermissionSet(CreatePermissionSetRequest $args)
    {
        $result = parent::createPermissionSet($args->toArray());
        return new CreatePermissionSetResponse($result->toArray());
    }
}
