<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelQualityJobDefinition;

trait CreateModelQualityJobDefinitionTrait
{
    /**
     * @param CreateModelQualityJobDefinitionRequest $args
     * @return CreateModelQualityJobDefinitionResponse
     */
    public function createModelQualityJobDefinition(CreateModelQualityJobDefinitionRequest $args)
    {
        $result = parent::createModelQualityJobDefinition($args->toArray());
        return new CreateModelQualityJobDefinitionResponse($result->toArray());
    }
}
