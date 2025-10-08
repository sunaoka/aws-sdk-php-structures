<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetConfigurationSet;

trait GetConfigurationSetTrait
{
    /**
     * @param GetConfigurationSetRequest $args
     * @return GetConfigurationSetResponse
     */
    public function getConfigurationSet(GetConfigurationSetRequest $args)
    {
        $result = parent::getConfigurationSet($args->toArray());
        return new GetConfigurationSetResponse($result->toArray());
    }
}
