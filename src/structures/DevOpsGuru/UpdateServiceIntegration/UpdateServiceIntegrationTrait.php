<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\UpdateServiceIntegration;

trait UpdateServiceIntegrationTrait
{
    /**
     * @param UpdateServiceIntegrationRequest $args
     * @return UpdateServiceIntegrationResponse
     */
    public function updateServiceIntegration(UpdateServiceIntegrationRequest $args)
    {
        $result = parent::updateServiceIntegration($args->toArray());
        return new UpdateServiceIntegrationResponse($result->toArray());
    }
}
