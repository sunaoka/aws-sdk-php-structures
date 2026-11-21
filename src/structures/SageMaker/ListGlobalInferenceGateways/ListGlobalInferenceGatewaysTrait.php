<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListGlobalInferenceGateways;

trait ListGlobalInferenceGatewaysTrait
{
    /**
     * @param ListGlobalInferenceGatewaysRequest $args
     * @return ListGlobalInferenceGatewaysResponse
     */
    public function listGlobalInferenceGateways(ListGlobalInferenceGatewaysRequest $args)
    {
        $result = parent::listGlobalInferenceGateways($args->toArray());
        return new ListGlobalInferenceGatewaysResponse($result->toArray());
    }
}
