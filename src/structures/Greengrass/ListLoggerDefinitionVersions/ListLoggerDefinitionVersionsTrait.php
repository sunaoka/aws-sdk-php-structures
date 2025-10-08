<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListLoggerDefinitionVersions;

trait ListLoggerDefinitionVersionsTrait
{
    /**
     * @param ListLoggerDefinitionVersionsRequest $args
     * @return ListLoggerDefinitionVersionsResponse
     */
    public function listLoggerDefinitionVersions(ListLoggerDefinitionVersionsRequest $args)
    {
        $result = parent::listLoggerDefinitionVersions($args->toArray());
        return new ListLoggerDefinitionVersionsResponse($result->toArray());
    }
}
