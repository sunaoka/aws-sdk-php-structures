<?php

namespace Sunaoka\Aws\Structures\BackupGateway\DisassociateGatewayFromServer;

trait DisassociateGatewayFromServerTrait
{
    /**
     * @param DisassociateGatewayFromServerRequest $args
     * @return DisassociateGatewayFromServerResponse
     */
    public function disassociateGatewayFromServer(DisassociateGatewayFromServerRequest $args)
    {
        $result = parent::disassociateGatewayFromServer($args->toArray());
        return new DisassociateGatewayFromServerResponse($result->toArray());
    }
}
