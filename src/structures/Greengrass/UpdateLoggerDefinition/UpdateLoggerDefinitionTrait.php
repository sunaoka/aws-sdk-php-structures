<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateLoggerDefinition;

trait UpdateLoggerDefinitionTrait
{
    /**
     * @param UpdateLoggerDefinitionRequest $args
     * @return UpdateLoggerDefinitionResponse
     */
    public function updateLoggerDefinition(UpdateLoggerDefinitionRequest $args)
    {
        $result = parent::updateLoggerDefinition($args->toArray());
        return new UpdateLoggerDefinitionResponse($result->toArray());
    }
}
