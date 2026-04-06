<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\CreateStreamSessionConnection;

trait CreateStreamSessionConnectionTrait
{
    /**
     * @param CreateStreamSessionConnectionRequest $args
     * @return CreateStreamSessionConnectionResponse
     */
    public function createStreamSessionConnection(CreateStreamSessionConnectionRequest $args)
    {
        $result = parent::createStreamSessionConnection($args->toArray());
        return new CreateStreamSessionConnectionResponse($result->toArray());
    }
}
