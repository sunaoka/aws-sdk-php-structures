<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ResetAllResourceLogLevels;

trait ResetAllResourceLogLevelsTrait
{
    /**
     * @param ResetAllResourceLogLevelsRequest $args
     * @return ResetAllResourceLogLevelsResponse
     */
    public function resetAllResourceLogLevels(ResetAllResourceLogLevelsRequest $args)
    {
        $result = parent::resetAllResourceLogLevels($args->toArray());
        return new ResetAllResourceLogLevelsResponse($result->toArray());
    }
}
