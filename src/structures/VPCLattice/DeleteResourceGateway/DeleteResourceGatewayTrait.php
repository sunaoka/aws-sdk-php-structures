<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteResourceGateway;

trait DeleteResourceGatewayTrait
{
    /**
     * @param DeleteResourceGatewayRequest $args
     * @return DeleteResourceGatewayResponse
     */
    public function deleteResourceGateway(DeleteResourceGatewayRequest $args)
    {
        $result = parent::deleteResourceGateway($args->toArray());
        return new DeleteResourceGatewayResponse($result->toArray());
    }
}
