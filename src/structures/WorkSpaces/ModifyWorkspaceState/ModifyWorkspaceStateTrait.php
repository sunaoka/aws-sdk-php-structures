<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyWorkspaceState;

trait ModifyWorkspaceStateTrait
{
    /**
     * @param ModifyWorkspaceStateRequest $args
     * @return ModifyWorkspaceStateResponse
     */
    public function modifyWorkspaceState(ModifyWorkspaceStateRequest $args)
    {
        $result = parent::modifyWorkspaceState($args->toArray());
        return new ModifyWorkspaceStateResponse($result->toArray());
    }
}
