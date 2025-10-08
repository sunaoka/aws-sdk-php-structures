<?php

namespace Sunaoka\Aws\Structures\IoTWireless\PutResourceLogLevel;

trait PutResourceLogLevelTrait
{
    /**
     * @param PutResourceLogLevelRequest $args
     * @return PutResourceLogLevelResponse
     */
    public function putResourceLogLevel(PutResourceLogLevelRequest $args)
    {
        $result = parent::putResourceLogLevel($args->toArray());
        return new PutResourceLogLevelResponse($result->toArray());
    }
}
