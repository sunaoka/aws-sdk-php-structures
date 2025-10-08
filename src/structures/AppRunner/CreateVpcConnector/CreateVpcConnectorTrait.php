<?php

namespace Sunaoka\Aws\Structures\AppRunner\CreateVpcConnector;

trait CreateVpcConnectorTrait
{
    /**
     * @param CreateVpcConnectorRequest $args
     * @return CreateVpcConnectorResponse
     */
    public function createVpcConnector(CreateVpcConnectorRequest $args)
    {
        $result = parent::createVpcConnector($args->toArray());
        return new CreateVpcConnectorResponse($result->toArray());
    }
}
