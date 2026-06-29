<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListExperimentDefinitions;

trait ListExperimentDefinitionsTrait
{
    /**
     * @param ListExperimentDefinitionsRequest $args
     * @return ListExperimentDefinitionsResponse
     */
    public function listExperimentDefinitions(ListExperimentDefinitionsRequest $args)
    {
        $result = parent::listExperimentDefinitions($args->toArray());
        return new ListExperimentDefinitionsResponse($result->toArray());
    }
}
