<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateExpressGatewayService;

trait CreateExpressGatewayServiceTrait
{
    /**
     * @param CreateExpressGatewayServiceRequest $args
     * @return CreateExpressGatewayServiceResponse
     */
    public function createExpressGatewayService(CreateExpressGatewayServiceRequest $args)
    {
        $result = parent::createExpressGatewayService($args->toArray());
        return new CreateExpressGatewayServiceResponse($result->toArray());
    }
}
