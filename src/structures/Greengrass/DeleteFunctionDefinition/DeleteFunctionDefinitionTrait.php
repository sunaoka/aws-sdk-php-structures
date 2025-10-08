<?php

namespace Sunaoka\Aws\Structures\Greengrass\DeleteFunctionDefinition;

trait DeleteFunctionDefinitionTrait
{
    /**
     * @param DeleteFunctionDefinitionRequest $args
     * @return DeleteFunctionDefinitionResponse
     */
    public function deleteFunctionDefinition(DeleteFunctionDefinitionRequest $args)
    {
        $result = parent::deleteFunctionDefinition($args->toArray());
        return new DeleteFunctionDefinitionResponse($result->toArray());
    }
}
