<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateNetworkMigrationMapperSegment;

trait UpdateNetworkMigrationMapperSegmentTrait
{
    /**
     * @param UpdateNetworkMigrationMapperSegmentRequest $args
     * @return UpdateNetworkMigrationMapperSegmentResponse
     */
    public function updateNetworkMigrationMapperSegment(UpdateNetworkMigrationMapperSegmentRequest $args)
    {
        $result = parent::updateNetworkMigrationMapperSegment($args->toArray());
        return new UpdateNetworkMigrationMapperSegmentResponse($result->toArray());
    }
}
