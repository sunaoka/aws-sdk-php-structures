<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListConnectorDefinitionVersions;

trait ListConnectorDefinitionVersionsTrait
{
    /**
     * @param ListConnectorDefinitionVersionsRequest $args
     * @return ListConnectorDefinitionVersionsResponse
     */
    public function listConnectorDefinitionVersions(ListConnectorDefinitionVersionsRequest $args)
    {
        $result = parent::listConnectorDefinitionVersions($args->toArray());
        return new ListConnectorDefinitionVersionsResponse($result->toArray());
    }
}
