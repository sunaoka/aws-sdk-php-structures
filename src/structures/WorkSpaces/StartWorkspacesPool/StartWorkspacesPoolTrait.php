<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\StartWorkspacesPool;

trait StartWorkspacesPoolTrait
{
    /**
     * @param StartWorkspacesPoolRequest $args
     * @return StartWorkspacesPoolResponse
     */
    public function startWorkspacesPool(StartWorkspacesPoolRequest $args)
    {
        $result = parent::startWorkspacesPool($args->toArray());
        return new StartWorkspacesPoolResponse($result->toArray());
    }
}
