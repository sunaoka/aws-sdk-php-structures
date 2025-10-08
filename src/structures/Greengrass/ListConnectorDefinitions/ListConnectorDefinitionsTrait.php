<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListConnectorDefinitions;

trait ListConnectorDefinitionsTrait
{
    /**
     * @param ListConnectorDefinitionsRequest $args
     * @return ListConnectorDefinitionsResponse
     */
    public function listConnectorDefinitions(ListConnectorDefinitionsRequest $args)
    {
        $result = parent::listConnectorDefinitions($args->toArray());
        return new ListConnectorDefinitionsResponse($result->toArray());
    }
}
