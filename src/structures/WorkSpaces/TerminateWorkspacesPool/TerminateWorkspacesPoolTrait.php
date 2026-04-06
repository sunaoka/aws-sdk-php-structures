<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\TerminateWorkspacesPool;

trait TerminateWorkspacesPoolTrait
{
    /**
     * @param TerminateWorkspacesPoolRequest $args
     * @return TerminateWorkspacesPoolResponse
     */
    public function terminateWorkspacesPool(TerminateWorkspacesPoolRequest $args)
    {
        $result = parent::terminateWorkspacesPool($args->toArray());
        return new TerminateWorkspacesPoolResponse($result->toArray());
    }
}
