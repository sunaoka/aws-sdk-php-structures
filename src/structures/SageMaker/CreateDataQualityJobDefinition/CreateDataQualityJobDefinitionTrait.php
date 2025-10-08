<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDataQualityJobDefinition;

trait CreateDataQualityJobDefinitionTrait
{
    /**
     * @param CreateDataQualityJobDefinitionRequest $args
     * @return CreateDataQualityJobDefinitionResponse
     */
    public function createDataQualityJobDefinition(CreateDataQualityJobDefinitionRequest $args)
    {
        $result = parent::createDataQualityJobDefinition($args->toArray());
        return new CreateDataQualityJobDefinitionResponse($result->toArray());
    }
}
