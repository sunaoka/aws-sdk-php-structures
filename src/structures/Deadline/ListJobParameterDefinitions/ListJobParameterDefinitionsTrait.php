<?php

namespace Sunaoka\Aws\Structures\Deadline\ListJobParameterDefinitions;

trait ListJobParameterDefinitionsTrait
{
    /**
     * @param ListJobParameterDefinitionsRequest $args
     * @return ListJobParameterDefinitionsResponse
     */
    public function listJobParameterDefinitions(ListJobParameterDefinitionsRequest $args)
    {
        $result = parent::listJobParameterDefinitions($args->toArray());
        return new ListJobParameterDefinitionsResponse($result->toArray());
    }
}
