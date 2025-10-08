<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNatGateway;

trait DeleteNatGatewayTrait
{
    /**
     * @param DeleteNatGatewayRequest $args
     * @return DeleteNatGatewayResponse
     */
    public function deleteNatGateway(DeleteNatGatewayRequest $args)
    {
        $result = parent::deleteNatGateway($args->toArray());
        return new DeleteNatGatewayResponse($result->toArray());
    }
}
