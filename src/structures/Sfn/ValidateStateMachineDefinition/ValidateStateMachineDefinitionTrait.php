<?php

namespace Sunaoka\Aws\Structures\Sfn\ValidateStateMachineDefinition;

trait ValidateStateMachineDefinitionTrait
{
    /**
     * @param ValidateStateMachineDefinitionRequest $args
     * @return ValidateStateMachineDefinitionResponse
     */
    public function validateStateMachineDefinition(ValidateStateMachineDefinitionRequest $args)
    {
        $result = parent::validateStateMachineDefinition($args->toArray());
        return new ValidateStateMachineDefinitionResponse($result->toArray());
    }
}
