<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteExpressGatewayService;

trait DeleteExpressGatewayServiceTrait
{
    /**
     * @param DeleteExpressGatewayServiceRequest $args
     * @return DeleteExpressGatewayServiceResponse
     */
    public function deleteExpressGatewayService(DeleteExpressGatewayServiceRequest $args)
    {
        $result = parent::deleteExpressGatewayService($args->toArray());
        return new DeleteExpressGatewayServiceResponse($result->toArray());
    }
}
