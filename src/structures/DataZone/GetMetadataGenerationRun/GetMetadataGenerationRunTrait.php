<?php

namespace Sunaoka\Aws\Structures\DataZone\GetMetadataGenerationRun;

trait GetMetadataGenerationRunTrait
{
    /**
     * @param GetMetadataGenerationRunRequest $args
     * @return GetMetadataGenerationRunResponse
     */
    public function getMetadataGenerationRun(GetMetadataGenerationRunRequest $args)
    {
        $result = parent::getMetadataGenerationRun($args->toArray());
        return new GetMetadataGenerationRunResponse($result->toArray());
    }
}
