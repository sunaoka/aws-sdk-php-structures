<?php

namespace Sunaoka\Aws\Structures\RAM\SetDefaultPermissionVersion;

trait SetDefaultPermissionVersionTrait
{
    /**
     * @param SetDefaultPermissionVersionRequest $args
     * @return SetDefaultPermissionVersionResponse
     */
    public function setDefaultPermissionVersion(SetDefaultPermissionVersionRequest $args)
    {
        $result = parent::setDefaultPermissionVersion($args->toArray());
        return new SetDefaultPermissionVersionResponse($result->toArray());
    }
}
