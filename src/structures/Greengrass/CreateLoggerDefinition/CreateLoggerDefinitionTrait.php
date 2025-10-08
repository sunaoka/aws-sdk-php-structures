<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateLoggerDefinition;

trait CreateLoggerDefinitionTrait
{
    /**
     * @param CreateLoggerDefinitionRequest $args
     * @return CreateLoggerDefinitionResponse
     */
    public function createLoggerDefinition(CreateLoggerDefinitionRequest $args)
    {
        $result = parent::createLoggerDefinition($args->toArray());
        return new CreateLoggerDefinitionResponse($result->toArray());
    }
}
