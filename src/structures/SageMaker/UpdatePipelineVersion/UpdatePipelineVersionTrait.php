<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdatePipelineVersion;

trait UpdatePipelineVersionTrait
{
    /**
     * @param UpdatePipelineVersionRequest $args
     * @return UpdatePipelineVersionResponse
     */
    public function updatePipelineVersion(UpdatePipelineVersionRequest $args)
    {
        $result = parent::updatePipelineVersion($args->toArray());
        return new UpdatePipelineVersionResponse($result->toArray());
    }
}
