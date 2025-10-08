<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateFlowDefinition;

trait CreateFlowDefinitionTrait
{
    /**
     * @param CreateFlowDefinitionRequest $args
     * @return CreateFlowDefinitionResponse
     */
    public function createFlowDefinition(CreateFlowDefinitionRequest $args)
    {
        $result = parent::createFlowDefinition($args->toArray());
        return new CreateFlowDefinitionResponse($result->toArray());
    }
}
