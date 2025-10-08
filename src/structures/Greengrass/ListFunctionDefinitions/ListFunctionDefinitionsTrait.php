<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListFunctionDefinitions;

trait ListFunctionDefinitionsTrait
{
    /**
     * @param ListFunctionDefinitionsRequest $args
     * @return ListFunctionDefinitionsResponse
     */
    public function listFunctionDefinitions(ListFunctionDefinitionsRequest $args)
    {
        $result = parent::listFunctionDefinitions($args->toArray());
        return new ListFunctionDefinitionsResponse($result->toArray());
    }
}
