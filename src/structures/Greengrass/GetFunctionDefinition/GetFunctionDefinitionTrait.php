<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetFunctionDefinition;

trait GetFunctionDefinitionTrait
{
    /**
     * @param GetFunctionDefinitionRequest $args
     * @return GetFunctionDefinitionResponse
     */
    public function getFunctionDefinition(GetFunctionDefinitionRequest $args)
    {
        $result = parent::getFunctionDefinition($args->toArray());
        return new GetFunctionDefinitionResponse($result->toArray());
    }
}
