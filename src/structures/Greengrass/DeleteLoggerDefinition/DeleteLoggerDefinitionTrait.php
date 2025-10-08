<?php

namespace Sunaoka\Aws\Structures\Greengrass\DeleteLoggerDefinition;

trait DeleteLoggerDefinitionTrait
{
    /**
     * @param DeleteLoggerDefinitionRequest $args
     * @return DeleteLoggerDefinitionResponse
     */
    public function deleteLoggerDefinition(DeleteLoggerDefinitionRequest $args)
    {
        $result = parent::deleteLoggerDefinition($args->toArray());
        return new DeleteLoggerDefinitionResponse($result->toArray());
    }
}
