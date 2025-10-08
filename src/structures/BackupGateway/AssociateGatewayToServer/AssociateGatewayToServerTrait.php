<?php

namespace Sunaoka\Aws\Structures\BackupGateway\AssociateGatewayToServer;

trait AssociateGatewayToServerTrait
{
    /**
     * @param AssociateGatewayToServerRequest $args
     * @return AssociateGatewayToServerResponse
     */
    public function associateGatewayToServer(AssociateGatewayToServerRequest $args)
    {
        $result = parent::associateGatewayToServer($args->toArray());
        return new AssociateGatewayToServerResponse($result->toArray());
    }
}
