<?php

namespace Sunaoka\Aws\Structures\DataZone\ListMetadataGenerationRuns;

trait ListMetadataGenerationRunsTrait
{
    /**
     * @param ListMetadataGenerationRunsRequest $args
     * @return ListMetadataGenerationRunsResponse
     */
    public function listMetadataGenerationRuns(ListMetadataGenerationRunsRequest $args)
    {
        $result = parent::listMetadataGenerationRuns($args->toArray());
        return new ListMetadataGenerationRunsResponse($result->toArray());
    }
}
