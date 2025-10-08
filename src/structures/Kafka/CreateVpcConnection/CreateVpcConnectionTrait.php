<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateVpcConnection;

trait CreateVpcConnectionTrait
{
    /**
     * @param CreateVpcConnectionRequest $args
     * @return CreateVpcConnectionResponse
     */
    public function createVpcConnection(CreateVpcConnectionRequest $args)
    {
        $result = parent::createVpcConnection($args->toArray());
        return new CreateVpcConnectionResponse($result->toArray());
    }
}
