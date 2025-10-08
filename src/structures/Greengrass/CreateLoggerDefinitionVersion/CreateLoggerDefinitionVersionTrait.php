<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateLoggerDefinitionVersion;

trait CreateLoggerDefinitionVersionTrait
{
    /**
     * @param CreateLoggerDefinitionVersionRequest $args
     * @return CreateLoggerDefinitionVersionResponse
     */
    public function createLoggerDefinitionVersion(CreateLoggerDefinitionVersionRequest $args)
    {
        $result = parent::createLoggerDefinitionVersion($args->toArray());
        return new CreateLoggerDefinitionVersionResponse($result->toArray());
    }
}
