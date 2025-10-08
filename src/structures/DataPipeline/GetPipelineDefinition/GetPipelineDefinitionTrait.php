<?php

namespace Sunaoka\Aws\Structures\DataPipeline\GetPipelineDefinition;

trait GetPipelineDefinitionTrait
{
    /**
     * @param GetPipelineDefinitionRequest $args
     * @return GetPipelineDefinitionResponse
     */
    public function getPipelineDefinition(GetPipelineDefinitionRequest $args)
    {
        $result = parent::getPipelineDefinition($args->toArray());
        return new GetPipelineDefinitionResponse($result->toArray());
    }
}
