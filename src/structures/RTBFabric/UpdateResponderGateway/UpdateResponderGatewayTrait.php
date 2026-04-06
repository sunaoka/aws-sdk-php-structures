<?php

namespace Sunaoka\Aws\Structures\RTBFabric\UpdateResponderGateway;

trait UpdateResponderGatewayTrait
{
    /**
     * @param UpdateResponderGatewayRequest $args
     * @return UpdateResponderGatewayResponse
     */
    public function updateResponderGateway(UpdateResponderGatewayRequest $args)
    {
        $result = parent::updateResponderGateway($args->toArray());
        return new UpdateResponderGatewayResponse($result->toArray());
    }
}
