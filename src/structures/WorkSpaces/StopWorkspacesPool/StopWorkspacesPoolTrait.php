<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\StopWorkspacesPool;

trait StopWorkspacesPoolTrait
{
    /**
     * @param StopWorkspacesPoolRequest $args
     * @return StopWorkspacesPoolResponse
     */
    public function stopWorkspacesPool(StopWorkspacesPoolRequest $args)
    {
        $result = parent::stopWorkspacesPool($args->toArray());
        return new StopWorkspacesPoolResponse($result->toArray());
    }
}
