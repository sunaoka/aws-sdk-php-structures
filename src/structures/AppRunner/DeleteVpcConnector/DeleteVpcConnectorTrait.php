<?php

namespace Sunaoka\Aws\Structures\AppRunner\DeleteVpcConnector;

trait DeleteVpcConnectorTrait
{
    /**
     * @param DeleteVpcConnectorRequest $args
     * @return DeleteVpcConnectorResponse
     */
    public function deleteVpcConnector(DeleteVpcConnectorRequest $args)
    {
        $result = parent::deleteVpcConnector($args->toArray());
        return new DeleteVpcConnectorResponse($result->toArray());
    }
}
