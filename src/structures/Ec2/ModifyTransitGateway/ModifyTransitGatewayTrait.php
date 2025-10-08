<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGateway;

trait ModifyTransitGatewayTrait
{
    /**
     * @param ModifyTransitGatewayRequest $args
     * @return ModifyTransitGatewayResponse
     */
    public function modifyTransitGateway(ModifyTransitGatewayRequest $args)
    {
        $result = parent::modifyTransitGateway($args->toArray());
        return new ModifyTransitGatewayResponse($result->toArray());
    }
}
