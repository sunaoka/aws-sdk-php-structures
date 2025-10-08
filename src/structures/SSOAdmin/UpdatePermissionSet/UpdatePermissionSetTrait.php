<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdatePermissionSet;

trait UpdatePermissionSetTrait
{
    /**
     * @param UpdatePermissionSetRequest $args
     * @return UpdatePermissionSetResponse
     */
    public function updatePermissionSet(UpdatePermissionSetRequest $args)
    {
        $result = parent::updatePermissionSet($args->toArray());
        return new UpdatePermissionSetResponse($result->toArray());
    }
}
