<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateFunctionDefinition;

trait UpdateFunctionDefinitionTrait
{
    /**
     * @param UpdateFunctionDefinitionRequest $args
     * @return UpdateFunctionDefinitionResponse
     */
    public function updateFunctionDefinition(UpdateFunctionDefinitionRequest $args)
    {
        $result = parent::updateFunctionDefinition($args->toArray());
        return new UpdateFunctionDefinitionResponse($result->toArray());
    }
}
