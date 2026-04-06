<?php

namespace Sunaoka\Aws\Structures\RTBFabric\DeleteRequesterGateway;

trait DeleteRequesterGatewayTrait
{
    /**
     * @param DeleteRequesterGatewayRequest $args
     * @return DeleteRequesterGatewayResponse
     */
    public function deleteRequesterGateway(DeleteRequesterGatewayRequest $args)
    {
        $result = parent::deleteRequesterGateway($args->toArray());
        return new DeleteRequesterGatewayResponse($result->toArray());
    }
}
