<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteEgressOnlyInternetGateway;

trait DeleteEgressOnlyInternetGatewayTrait
{
    /**
     * @param DeleteEgressOnlyInternetGatewayRequest $args
     * @return DeleteEgressOnlyInternetGatewayResponse
     */
    public function deleteEgressOnlyInternetGateway(DeleteEgressOnlyInternetGatewayRequest $args)
    {
        $result = parent::deleteEgressOnlyInternetGateway($args->toArray());
        return new DeleteEgressOnlyInternetGatewayResponse($result->toArray());
    }
}
