<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationMapperSegments;

trait ListNetworkMigrationMapperSegmentsTrait
{
    /**
     * @param ListNetworkMigrationMapperSegmentsRequest $args
     * @return ListNetworkMigrationMapperSegmentsResponse
     */
    public function listNetworkMigrationMapperSegments(ListNetworkMigrationMapperSegmentsRequest $args)
    {
        $result = parent::listNetworkMigrationMapperSegments($args->toArray());
        return new ListNetworkMigrationMapperSegmentsResponse($result->toArray());
    }
}
