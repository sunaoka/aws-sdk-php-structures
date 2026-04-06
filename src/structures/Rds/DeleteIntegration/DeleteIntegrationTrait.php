<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteIntegration;

trait DeleteIntegrationTrait
{
    /**
     * @param DeleteIntegrationRequest $args
     * @return DeleteIntegrationResponse
     */
    public function deleteIntegration(DeleteIntegrationRequest $args)
    {
        $result = parent::deleteIntegration($args->toArray());
        return new DeleteIntegrationResponse($result->toArray());
    }
}
