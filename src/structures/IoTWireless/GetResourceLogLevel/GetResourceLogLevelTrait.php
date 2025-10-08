<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetResourceLogLevel;

trait GetResourceLogLevelTrait
{
    /**
     * @param GetResourceLogLevelRequest $args
     * @return GetResourceLogLevelResponse
     */
    public function getResourceLogLevel(GetResourceLogLevelRequest $args)
    {
        $result = parent::getResourceLogLevel($args->toArray());
        return new GetResourceLogLevelResponse($result->toArray());
    }
}
