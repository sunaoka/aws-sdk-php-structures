<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateExpressGatewayService;

trait UpdateExpressGatewayServiceTrait
{
    /**
     * @param UpdateExpressGatewayServiceRequest $args
     * @return UpdateExpressGatewayServiceResponse
     */
    public function updateExpressGatewayService(UpdateExpressGatewayServiceRequest $args)
    {
        $result = parent::updateExpressGatewayService($args->toArray());
        return new UpdateExpressGatewayServiceResponse($result->toArray());
    }
}
