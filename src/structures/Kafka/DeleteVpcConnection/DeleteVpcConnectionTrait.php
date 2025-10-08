<?php

namespace Sunaoka\Aws\Structures\Kafka\DeleteVpcConnection;

trait DeleteVpcConnectionTrait
{
    /**
     * @param DeleteVpcConnectionRequest $args
     * @return DeleteVpcConnectionResponse
     */
    public function deleteVpcConnection(DeleteVpcConnectionRequest $args)
    {
        $result = parent::deleteVpcConnection($args->toArray());
        return new DeleteVpcConnectionResponse($result->toArray());
    }
}
