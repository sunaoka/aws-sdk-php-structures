<?php

namespace Sunaoka\Aws\Structures\DataZone\CancelMetadataGenerationRun;

trait CancelMetadataGenerationRunTrait
{
    /**
     * @param CancelMetadataGenerationRunRequest $args
     * @return CancelMetadataGenerationRunResponse
     */
    public function cancelMetadataGenerationRun(CancelMetadataGenerationRunRequest $args)
    {
        $result = parent::cancelMetadataGenerationRun($args->toArray());
        return new CancelMetadataGenerationRunResponse($result->toArray());
    }
}
