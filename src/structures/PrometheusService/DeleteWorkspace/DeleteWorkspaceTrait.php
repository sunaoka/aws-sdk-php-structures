<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DeleteWorkspace;

trait DeleteWorkspaceTrait
{
    /**
     * @param DeleteWorkspaceRequest $args
     * @return void
     */
    public function deleteWorkspace(DeleteWorkspaceRequest $args)
    {
        parent::deleteWorkspace($args->toArray());
    }
}
