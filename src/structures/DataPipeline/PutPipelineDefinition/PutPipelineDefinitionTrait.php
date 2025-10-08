<?php

namespace Sunaoka\Aws\Structures\DataPipeline\PutPipelineDefinition;

trait PutPipelineDefinitionTrait
{
    /**
     * @param PutPipelineDefinitionRequest $args
     * @return PutPipelineDefinitionResponse
     */
    public function putPipelineDefinition(PutPipelineDefinitionRequest $args)
    {
        $result = parent::putPipelineDefinition($args->toArray());
        return new PutPipelineDefinitionResponse($result->toArray());
    }
}
