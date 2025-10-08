<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListCoreDefinitionVersions;

trait ListCoreDefinitionVersionsTrait
{
    /**
     * @param ListCoreDefinitionVersionsRequest $args
     * @return ListCoreDefinitionVersionsResponse
     */
    public function listCoreDefinitionVersions(ListCoreDefinitionVersionsRequest $args)
    {
        $result = parent::listCoreDefinitionVersions($args->toArray());
        return new ListCoreDefinitionVersionsResponse($result->toArray());
    }
}
