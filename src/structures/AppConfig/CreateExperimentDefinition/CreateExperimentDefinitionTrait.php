<?php

namespace Sunaoka\Aws\Structures\AppConfig\CreateExperimentDefinition;

trait CreateExperimentDefinitionTrait
{
    /**
     * @param CreateExperimentDefinitionRequest $args
     * @return CreateExperimentDefinitionResponse
     */
    public function createExperimentDefinition(CreateExperimentDefinitionRequest $args)
    {
        $result = parent::createExperimentDefinition($args->toArray());
        return new CreateExperimentDefinitionResponse($result->toArray());
    }
}
