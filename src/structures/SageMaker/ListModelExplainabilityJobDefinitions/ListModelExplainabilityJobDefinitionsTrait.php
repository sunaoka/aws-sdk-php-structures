<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelExplainabilityJobDefinitions;

trait ListModelExplainabilityJobDefinitionsTrait
{
    /**
     * @param ListModelExplainabilityJobDefinitionsRequest $args
     * @return ListModelExplainabilityJobDefinitionsResponse
     */
    public function listModelExplainabilityJobDefinitions(ListModelExplainabilityJobDefinitionsRequest $args)
    {
        $result = parent::listModelExplainabilityJobDefinitions($args->toArray());
        return new ListModelExplainabilityJobDefinitionsResponse($result->toArray());
    }
}
