<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetIntegration;

trait GetIntegrationTrait
{
    /**
     * @param GetIntegrationRequest $args
     * @return GetIntegrationResponse
     */
    public function getIntegration(GetIntegrationRequest $args)
    {
        $result = parent::getIntegration($args->toArray());
        return new GetIntegrationResponse($result->toArray());
    }
}
