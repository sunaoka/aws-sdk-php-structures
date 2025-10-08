<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListFunctionDefinitionVersions;

trait ListFunctionDefinitionVersionsTrait
{
    /**
     * @param ListFunctionDefinitionVersionsRequest $args
     * @return ListFunctionDefinitionVersionsResponse
     */
    public function listFunctionDefinitionVersions(ListFunctionDefinitionVersionsRequest $args)
    {
        $result = parent::listFunctionDefinitionVersions($args->toArray());
        return new ListFunctionDefinitionVersionsResponse($result->toArray());
    }
}
