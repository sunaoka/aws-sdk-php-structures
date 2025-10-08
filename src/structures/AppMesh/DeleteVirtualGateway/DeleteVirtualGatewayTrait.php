<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualGateway;

trait DeleteVirtualGatewayTrait
{
    /**
     * @param DeleteVirtualGatewayRequest $args
     * @return DeleteVirtualGatewayResponse
     */
    public function deleteVirtualGateway(DeleteVirtualGatewayRequest $args)
    {
        $result = parent::deleteVirtualGateway($args->toArray());
        return new DeleteVirtualGatewayResponse($result->toArray());
    }
}
