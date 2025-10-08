<?php

namespace Sunaoka\Aws\Structures\SesV2\GetConfigurationSet;

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
