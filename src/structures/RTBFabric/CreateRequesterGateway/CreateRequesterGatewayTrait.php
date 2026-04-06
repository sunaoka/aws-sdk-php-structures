<?php

namespace Sunaoka\Aws\Structures\RTBFabric\CreateRequesterGateway;

trait CreateRequesterGatewayTrait
{
    /**
     * @param CreateRequesterGatewayRequest $args
     * @return CreateRequesterGatewayResponse
     */
    public function createRequesterGateway(CreateRequesterGatewayRequest $args)
    {
        $result = parent::createRequesterGateway($args->toArray());
        return new CreateRequesterGatewayResponse($result->toArray());
    }
}
