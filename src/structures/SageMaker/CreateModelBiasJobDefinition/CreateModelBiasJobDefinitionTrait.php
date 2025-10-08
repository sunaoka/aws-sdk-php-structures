<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelBiasJobDefinition;

trait CreateModelBiasJobDefinitionTrait
{
    /**
     * @param CreateModelBiasJobDefinitionRequest $args
     * @return CreateModelBiasJobDefinitionResponse
     */
    public function createModelBiasJobDefinition(CreateModelBiasJobDefinitionRequest $args)
    {
        $result = parent::createModelBiasJobDefinition($args->toArray());
        return new CreateModelBiasJobDefinitionResponse($result->toArray());
    }
}
