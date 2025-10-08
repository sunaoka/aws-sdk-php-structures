<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\UpdateConnectionAliasPermission;

trait UpdateConnectionAliasPermissionTrait
{
    /**
     * @param UpdateConnectionAliasPermissionRequest $args
     * @return UpdateConnectionAliasPermissionResponse
     */
    public function updateConnectionAliasPermission(UpdateConnectionAliasPermissionRequest $args)
    {
        $result = parent::updateConnectionAliasPermission($args->toArray());
        return new UpdateConnectionAliasPermissionResponse($result->toArray());
    }
}
