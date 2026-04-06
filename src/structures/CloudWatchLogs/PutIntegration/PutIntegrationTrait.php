<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutIntegration;

trait PutIntegrationTrait
{
    /**
     * @param PutIntegrationRequest $args
     * @return PutIntegrationResponse
     */
    public function putIntegration(PutIntegrationRequest $args)
    {
        $result = parent::putIntegration($args->toArray());
        return new PutIntegrationResponse($result->toArray());
    }
}
