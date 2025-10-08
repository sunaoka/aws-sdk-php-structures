<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListFlowDefinitions;

trait ListFlowDefinitionsTrait
{
    /**
     * @param ListFlowDefinitionsRequest $args
     * @return ListFlowDefinitionsResponse
     */
    public function listFlowDefinitions(ListFlowDefinitionsRequest $args)
    {
        $result = parent::listFlowDefinitions($args->toArray());
        return new ListFlowDefinitionsResponse($result->toArray());
    }
}
