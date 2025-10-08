<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteIntegrationResponse;

trait DeleteIntegrationResponseTrait
{
    /**
     * @param DeleteIntegrationResponseRequest $args
     * @return void
     */
    public function deleteIntegrationResponse(DeleteIntegrationResponseRequest $args)
    {
        parent::deleteIntegrationResponse($args->toArray());
    }
}
