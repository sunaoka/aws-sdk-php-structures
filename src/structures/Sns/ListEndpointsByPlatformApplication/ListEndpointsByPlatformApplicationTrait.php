<?php

namespace Sunaoka\Aws\Structures\Sns\ListEndpointsByPlatformApplication;

trait ListEndpointsByPlatformApplicationTrait
{
    /**
     * @param ListEndpointsByPlatformApplicationRequest $args
     * @return ListEndpointsByPlatformApplicationResponse
     */
    public function listEndpointsByPlatformApplication(ListEndpointsByPlatformApplicationRequest $args)
    {
        $result = parent::listEndpointsByPlatformApplication($args->toArray());
        return new ListEndpointsByPlatformApplicationResponse($result->toArray());
    }
}
