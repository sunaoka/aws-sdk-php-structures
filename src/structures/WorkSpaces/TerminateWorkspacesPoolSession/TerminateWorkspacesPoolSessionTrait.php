<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\TerminateWorkspacesPoolSession;

trait TerminateWorkspacesPoolSessionTrait
{
    /**
     * @param TerminateWorkspacesPoolSessionRequest $args
     * @return TerminateWorkspacesPoolSessionResponse
     */
    public function terminateWorkspacesPoolSession(TerminateWorkspacesPoolSessionRequest $args)
    {
        $result = parent::terminateWorkspacesPoolSession($args->toArray());
        return new TerminateWorkspacesPoolSessionResponse($result->toArray());
    }
}
