<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteCarrierGateway;

trait DeleteCarrierGatewayTrait
{
    /**
     * @param DeleteCarrierGatewayRequest $args
     * @return DeleteCarrierGatewayResponse
     */
    public function deleteCarrierGateway(DeleteCarrierGatewayRequest $args)
    {
        $result = parent::deleteCarrierGateway($args->toArray());
        return new DeleteCarrierGatewayResponse($result->toArray());
    }
}
