<?php

namespace Sunaoka\Aws\Structures\DataZone\StartMetadataGenerationRun;

trait StartMetadataGenerationRunTrait
{
    /**
     * @param StartMetadataGenerationRunRequest $args
     * @return StartMetadataGenerationRunResponse
     */
    public function startMetadataGenerationRun(StartMetadataGenerationRunRequest $args)
    {
        $result = parent::startMetadataGenerationRun($args->toArray());
        return new StartMetadataGenerationRunResponse($result->toArray());
    }
}
