<?php

namespace Sunaoka\Aws\Structures\Outposts\StartConnection;

trait StartConnectionTrait
{
    /**
     * @param StartConnectionRequest $args
     * @return StartConnectionResponse
     */
    public function startConnection(StartConnectionRequest $args)
    {
        $result = parent::startConnection($args->toArray());
        return new StartConnectionResponse($result->toArray());
    }
}
