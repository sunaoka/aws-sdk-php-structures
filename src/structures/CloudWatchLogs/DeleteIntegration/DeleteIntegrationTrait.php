<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteIntegration;

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
