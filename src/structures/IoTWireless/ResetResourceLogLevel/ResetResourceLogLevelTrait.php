<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ResetResourceLogLevel;

trait ResetResourceLogLevelTrait
{
    /**
     * @param ResetResourceLogLevelRequest $args
     * @return ResetResourceLogLevelResponse
     */
    public function resetResourceLogLevel(ResetResourceLogLevelRequest $args)
    {
        $result = parent::resetResourceLogLevel($args->toArray());
        return new ResetResourceLogLevelResponse($result->toArray());
    }
}
