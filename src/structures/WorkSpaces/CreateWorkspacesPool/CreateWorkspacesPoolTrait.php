<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspacesPool;

trait CreateWorkspacesPoolTrait
{
    /**
     * @param CreateWorkspacesPoolRequest $args
     * @return CreateWorkspacesPoolResponse
     */
    public function createWorkspacesPool(CreateWorkspacesPoolRequest $args)
    {
        $result = parent::createWorkspacesPool($args->toArray());
        return new CreateWorkspacesPoolResponse($result->toArray());
    }
}
