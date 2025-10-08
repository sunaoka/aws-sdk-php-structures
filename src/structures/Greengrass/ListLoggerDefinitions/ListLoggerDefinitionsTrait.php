<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListLoggerDefinitions;

trait ListLoggerDefinitionsTrait
{
    /**
     * @param ListLoggerDefinitionsRequest $args
     * @return ListLoggerDefinitionsResponse
     */
    public function listLoggerDefinitions(ListLoggerDefinitionsRequest $args)
    {
        $result = parent::listLoggerDefinitions($args->toArray());
        return new ListLoggerDefinitionsResponse($result->toArray());
    }
}
