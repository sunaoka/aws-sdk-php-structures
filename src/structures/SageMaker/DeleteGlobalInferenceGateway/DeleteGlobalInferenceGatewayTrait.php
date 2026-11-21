<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteGlobalInferenceGateway;

trait DeleteGlobalInferenceGatewayTrait
{
    /**
     * @param DeleteGlobalInferenceGatewayRequest $args
     * @return DeleteGlobalInferenceGatewayResponse
     */
    public function deleteGlobalInferenceGateway(DeleteGlobalInferenceGatewayRequest $args)
    {
        $result = parent::deleteGlobalInferenceGateway($args->toArray());
        return new DeleteGlobalInferenceGatewayResponse($result->toArray());
    }
}
