<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetExperimentDefinition;

trait GetExperimentDefinitionTrait
{
    /**
     * @param GetExperimentDefinitionRequest $args
     * @return GetExperimentDefinitionResponse
     */
    public function getExperimentDefinition(GetExperimentDefinitionRequest $args)
    {
        $result = parent::getExperimentDefinition($args->toArray());
        return new GetExperimentDefinitionResponse($result->toArray());
    }
}
