<?php

namespace Sunaoka\Aws\Structures\SageMaker\AddInferenceGateway;

trait AddInferenceGatewayTrait
{
    /**
     * @param AddInferenceGatewayRequest $args
     * @return AddInferenceGatewayResponse
     */
    public function addInferenceGateway(AddInferenceGatewayRequest $args)
    {
        $result = parent::addInferenceGateway($args->toArray());
        return new AddInferenceGatewayResponse($result->toArray());
    }
}
