<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateFunctionDefinition;

trait CreateFunctionDefinitionTrait
{
    /**
     * @param CreateFunctionDefinitionRequest $args
     * @return CreateFunctionDefinitionResponse
     */
    public function createFunctionDefinition(CreateFunctionDefinitionRequest $args)
    {
        $result = parent::createFunctionDefinition($args->toArray());
        return new CreateFunctionDefinitionResponse($result->toArray());
    }
}
