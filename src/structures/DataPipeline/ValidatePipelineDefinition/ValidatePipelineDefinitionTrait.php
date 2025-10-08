<?php

namespace Sunaoka\Aws\Structures\DataPipeline\ValidatePipelineDefinition;

trait ValidatePipelineDefinitionTrait
{
    /**
     * @param ValidatePipelineDefinitionRequest $args
     * @return ValidatePipelineDefinitionResponse
     */
    public function validatePipelineDefinition(ValidatePipelineDefinitionRequest $args)
    {
        $result = parent::validatePipelineDefinition($args->toArray());
        return new ValidatePipelineDefinitionResponse($result->toArray());
    }
}
