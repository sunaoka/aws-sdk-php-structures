<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\DeleteDataIntegration;

trait DeleteDataIntegrationTrait
{
    /**
     * @param DeleteDataIntegrationRequest $args
     * @return DeleteDataIntegrationResponse
     */
    public function deleteDataIntegration(DeleteDataIntegrationRequest $args)
    {
        $result = parent::deleteDataIntegration($args->toArray());
        return new DeleteDataIntegrationResponse($result->toArray());
    }
}
