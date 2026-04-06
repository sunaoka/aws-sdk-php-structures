<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\UpdateWorkspacesPool;

trait UpdateWorkspacesPoolTrait
{
    /**
     * @param UpdateWorkspacesPoolRequest $args
     * @return UpdateWorkspacesPoolResponse
     */
    public function updateWorkspacesPool(UpdateWorkspacesPoolRequest $args)
    {
        $result = parent::updateWorkspacesPool($args->toArray());
        return new UpdateWorkspacesPoolResponse($result->toArray());
    }
}
