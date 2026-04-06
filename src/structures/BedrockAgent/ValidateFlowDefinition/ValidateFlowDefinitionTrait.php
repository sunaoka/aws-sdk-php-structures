<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition;

trait ValidateFlowDefinitionTrait
{
    /**
     * @param ValidateFlowDefinitionRequest $args
     * @return ValidateFlowDefinitionResponse
     */
    public function validateFlowDefinition(ValidateFlowDefinitionRequest $args)
    {
        $result = parent::validateFlowDefinition($args->toArray());
        return new ValidateFlowDefinitionResponse($result->toArray());
    }
}
