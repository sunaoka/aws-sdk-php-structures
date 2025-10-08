<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DisableGateway;

trait DisableGatewayTrait
{
    /**
     * @param DisableGatewayRequest $args
     * @return DisableGatewayResponse
     */
    public function disableGateway(DisableGatewayRequest $args)
    {
        $result = parent::disableGateway($args->toArray());
        return new DisableGatewayResponse($result->toArray());
    }
}
