<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ActivateGateway;

trait ActivateGatewayTrait
{
    /**
     * @param ActivateGatewayRequest $args
     * @return ActivateGatewayResponse
     */
    public function activateGateway(ActivateGatewayRequest $args)
    {
        $result = parent::activateGateway($args->toArray());
        return new ActivateGatewayResponse($result->toArray());
    }
}
