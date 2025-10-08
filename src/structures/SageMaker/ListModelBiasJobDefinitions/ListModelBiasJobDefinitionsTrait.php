<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelBiasJobDefinitions;

trait ListModelBiasJobDefinitionsTrait
{
    /**
     * @param ListModelBiasJobDefinitionsRequest $args
     * @return ListModelBiasJobDefinitionsResponse
     */
    public function listModelBiasJobDefinitions(ListModelBiasJobDefinitionsRequest $args)
    {
        $result = parent::listModelBiasJobDefinitions($args->toArray());
        return new ListModelBiasJobDefinitionsResponse($result->toArray());
    }
}
