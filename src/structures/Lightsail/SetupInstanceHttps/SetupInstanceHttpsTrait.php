<?php

namespace Sunaoka\Aws\Structures\Lightsail\SetupInstanceHttps;

trait SetupInstanceHttpsTrait
{
    /**
     * @param SetupInstanceHttpsRequest $args
     * @return SetupInstanceHttpsResponse
     */
    public function setupInstanceHttps(SetupInstanceHttpsRequest $args)
    {
        $result = parent::setupInstanceHttps($args->toArray());
        return new SetupInstanceHttpsResponse($result->toArray());
    }
}
