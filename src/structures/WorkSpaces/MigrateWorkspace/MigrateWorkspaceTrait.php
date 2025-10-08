<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\MigrateWorkspace;

trait MigrateWorkspaceTrait
{
    /**
     * @param MigrateWorkspaceRequest $args
     * @return MigrateWorkspaceResponse
     */
    public function migrateWorkspace(MigrateWorkspaceRequest $args)
    {
        $result = parent::migrateWorkspace($args->toArray());
        return new MigrateWorkspaceResponse($result->toArray());
    }
}
