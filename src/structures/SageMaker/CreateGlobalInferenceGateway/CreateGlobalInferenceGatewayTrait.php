<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateGlobalInferenceGateway;

trait CreateGlobalInferenceGatewayTrait
{
    /**
     * @param CreateGlobalInferenceGatewayRequest $args
     * @return CreateGlobalInferenceGatewayResponse
     */
    public function createGlobalInferenceGateway(CreateGlobalInferenceGatewayRequest $args)
    {
        $result = parent::createGlobalInferenceGateway($args->toArray());
        return new CreateGlobalInferenceGatewayResponse($result->toArray());
    }
}
