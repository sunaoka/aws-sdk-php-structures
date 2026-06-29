<?php

namespace Sunaoka\Aws\Structures\AppConfig\DeleteExperimentDefinition;

trait DeleteExperimentDefinitionTrait
{
    /**
     * @param DeleteExperimentDefinitionRequest $args
     * @return void
     */
    public function deleteExperimentDefinition(DeleteExperimentDefinitionRequest $args)
    {
        parent::deleteExperimentDefinition($args->toArray());
    }
}
