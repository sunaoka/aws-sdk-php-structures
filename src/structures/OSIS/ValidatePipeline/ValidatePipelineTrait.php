<?php

namespace Sunaoka\Aws\Structures\OSIS\ValidatePipeline;

trait ValidatePipelineTrait
{
    /**
     * @param ValidatePipelineRequest $args
     * @return ValidatePipelineResponse
     */
    public function validatePipeline(ValidatePipelineRequest $args)
    {
        $result = parent::validatePipeline($args->toArray());
        return new ValidatePipelineResponse($result->toArray());
    }
}
