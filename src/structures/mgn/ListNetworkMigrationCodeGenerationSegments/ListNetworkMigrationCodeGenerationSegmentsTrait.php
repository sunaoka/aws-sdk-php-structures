<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationCodeGenerationSegments;

trait ListNetworkMigrationCodeGenerationSegmentsTrait
{
    /**
     * @param ListNetworkMigrationCodeGenerationSegmentsRequest $args
     * @return ListNetworkMigrationCodeGenerationSegmentsResponse
     */
    public function listNetworkMigrationCodeGenerationSegments(ListNetworkMigrationCodeGenerationSegmentsRequest $args)
    {
        $result = parent::listNetworkMigrationCodeGenerationSegments($args->toArray());
        return new ListNetworkMigrationCodeGenerationSegmentsResponse($result->toArray());
    }
}
