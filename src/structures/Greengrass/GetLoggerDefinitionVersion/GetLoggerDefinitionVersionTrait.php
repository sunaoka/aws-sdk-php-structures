<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetLoggerDefinitionVersion;

trait GetLoggerDefinitionVersionTrait
{
    /**
     * @param GetLoggerDefinitionVersionRequest $args
     * @return GetLoggerDefinitionVersionResponse
     */
    public function getLoggerDefinitionVersion(GetLoggerDefinitionVersionRequest $args)
    {
        $result = parent::getLoggerDefinitionVersion($args->toArray());
        return new GetLoggerDefinitionVersionResponse($result->toArray());
    }
}
