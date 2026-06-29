<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateExperimentDefinition;

trait UpdateExperimentDefinitionTrait
{
    /**
     * @param UpdateExperimentDefinitionRequest $args
     * @return UpdateExperimentDefinitionResponse
     */
    public function updateExperimentDefinition(UpdateExperimentDefinitionRequest $args)
    {
        $result = parent::updateExperimentDefinition($args->toArray());
        return new UpdateExperimentDefinitionResponse($result->toArray());
    }
}
