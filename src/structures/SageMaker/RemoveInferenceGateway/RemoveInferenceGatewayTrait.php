<?php

namespace Sunaoka\Aws\Structures\SageMaker\RemoveInferenceGateway;

trait RemoveInferenceGatewayTrait
{
    /**
     * @param RemoveInferenceGatewayRequest $args
     * @return RemoveInferenceGatewayResponse
     */
    public function removeInferenceGateway(RemoveInferenceGatewayRequest $args)
    {
        $result = parent::removeInferenceGateway($args->toArray());
        return new RemoveInferenceGatewayResponse($result->toArray());
    }
}
