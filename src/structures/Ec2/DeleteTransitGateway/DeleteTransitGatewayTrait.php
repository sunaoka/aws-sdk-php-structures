<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGateway;

trait DeleteTransitGatewayTrait
{
    /**
     * @param DeleteTransitGatewayRequest $args
     * @return DeleteTransitGatewayResponse
     */
    public function deleteTransitGateway(DeleteTransitGatewayRequest $args)
    {
        $result = parent::deleteTransitGateway($args->toArray());
        return new DeleteTransitGatewayResponse($result->toArray());
    }
}
