<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListCoreDefinitions;

trait ListCoreDefinitionsTrait
{
    /**
     * @param ListCoreDefinitionsRequest $args
     * @return ListCoreDefinitionsResponse
     */
    public function listCoreDefinitions(ListCoreDefinitionsRequest $args)
    {
        $result = parent::listCoreDefinitions($args->toArray());
        return new ListCoreDefinitionsResponse($result->toArray());
    }
}
