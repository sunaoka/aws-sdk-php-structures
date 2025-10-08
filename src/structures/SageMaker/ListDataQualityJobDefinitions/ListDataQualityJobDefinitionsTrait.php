<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListDataQualityJobDefinitions;

trait ListDataQualityJobDefinitionsTrait
{
    /**
     * @param ListDataQualityJobDefinitionsRequest $args
     * @return ListDataQualityJobDefinitionsResponse
     */
    public function listDataQualityJobDefinitions(ListDataQualityJobDefinitionsRequest $args)
    {
        $result = parent::listDataQualityJobDefinitions($args->toArray());
        return new ListDataQualityJobDefinitionsResponse($result->toArray());
    }
}
