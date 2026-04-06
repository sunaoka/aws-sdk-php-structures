<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\TerminateStreamSession;

trait TerminateStreamSessionTrait
{
    /**
     * @param TerminateStreamSessionRequest $args
     * @return void
     */
    public function terminateStreamSession(TerminateStreamSessionRequest $args)
    {
        parent::terminateStreamSession($args->toArray());
    }
}
