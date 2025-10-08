<?php

namespace Sunaoka\Aws\Structures\RAM\CreatePermissionVersion;

trait CreatePermissionVersionTrait
{
    /**
     * @param CreatePermissionVersionRequest $args
     * @return CreatePermissionVersionResponse
     */
    public function createPermissionVersion(CreatePermissionVersionRequest $args)
    {
        $result = parent::createPermissionVersion($args->toArray());
        return new CreatePermissionVersionResponse($result->toArray());
    }
}
