<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateResourceGateway;

trait UpdateResourceGatewayTrait
{
    /**
     * @param UpdateResourceGatewayRequest $args
     * @return UpdateResourceGatewayResponse
     */
    public function updateResourceGateway(UpdateResourceGatewayRequest $args)
    {
        $result = parent::updateResourceGateway($args->toArray());
        return new UpdateResourceGatewayResponse($result->toArray());
    }
}
