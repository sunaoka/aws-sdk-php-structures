<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateGlobalInferenceGateway;

trait UpdateGlobalInferenceGatewayTrait
{
    /**
     * @param UpdateGlobalInferenceGatewayRequest $args
     * @return UpdateGlobalInferenceGatewayResponse
     */
    public function updateGlobalInferenceGateway(UpdateGlobalInferenceGatewayRequest $args)
    {
        $result = parent::updateGlobalInferenceGateway($args->toArray());
        return new UpdateGlobalInferenceGatewayResponse($result->toArray());
    }
}
