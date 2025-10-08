<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelQualityJobDefinitions;

trait ListModelQualityJobDefinitionsTrait
{
    /**
     * @param ListModelQualityJobDefinitionsRequest $args
     * @return ListModelQualityJobDefinitionsResponse
     */
    public function listModelQualityJobDefinitions(ListModelQualityJobDefinitionsRequest $args)
    {
        $result = parent::listModelQualityJobDefinitions($args->toArray());
        return new ListModelQualityJobDefinitionsResponse($result->toArray());
    }
}
