<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceGateways;

trait ListInferenceGatewaysTrait
{
    /**
     * @param ListInferenceGatewaysRequest $args
     * @return ListInferenceGatewaysResponse
     */
    public function listInferenceGateways(ListInferenceGatewaysRequest $args)
    {
        $result = parent::listInferenceGateways($args->toArray());
        return new ListInferenceGatewaysResponse($result->toArray());
    }
}
