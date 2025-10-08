<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelExplainabilityJobDefinition;

trait CreateModelExplainabilityJobDefinitionTrait
{
    /**
     * @param CreateModelExplainabilityJobDefinitionRequest $args
     * @return CreateModelExplainabilityJobDefinitionResponse
     */
    public function createModelExplainabilityJobDefinition(CreateModelExplainabilityJobDefinitionRequest $args)
    {
        $result = parent::createModelExplainabilityJobDefinition($args->toArray());
        return new CreateModelExplainabilityJobDefinitionResponse($result->toArray());
    }
}
