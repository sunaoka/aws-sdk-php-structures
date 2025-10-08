<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateConnection;

trait CreateConnectionTrait
{
    /**
     * @param CreateConnectionRequest $args
     * @return CreateConnectionResponse
     */
    public function createConnection(CreateConnectionRequest $args)
    {
        $result = parent::createConnection($args->toArray());
        return new CreateConnectionResponse($result->toArray());
    }
}
