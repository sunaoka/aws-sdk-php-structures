<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetLoggerDefinition;

trait GetLoggerDefinitionTrait
{
    /**
     * @param GetLoggerDefinitionRequest $args
     * @return GetLoggerDefinitionResponse
     */
    public function getLoggerDefinition(GetLoggerDefinitionRequest $args)
    {
        $result = parent::getLoggerDefinition($args->toArray());
        return new GetLoggerDefinitionResponse($result->toArray());
    }
}
