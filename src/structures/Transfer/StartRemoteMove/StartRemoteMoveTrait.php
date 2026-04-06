<?php

namespace Sunaoka\Aws\Structures\Transfer\StartRemoteMove;

trait StartRemoteMoveTrait
{
    /**
     * @param StartRemoteMoveRequest $args
     * @return StartRemoteMoveResponse
     */
    public function startRemoteMove(StartRemoteMoveRequest $args)
    {
        $result = parent::startRemoteMove($args->toArray());
        return new StartRemoteMoveResponse($result->toArray());
    }
}
