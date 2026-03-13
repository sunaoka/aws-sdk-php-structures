<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationMapperSegmentConstructs;

trait ListNetworkMigrationMapperSegmentConstructsTrait
{
    /**
     * @param ListNetworkMigrationMapperSegmentConstructsRequest $args
     * @return ListNetworkMigrationMapperSegmentConstructsResponse
     */
    public function listNetworkMigrationMapperSegmentConstructs(ListNetworkMigrationMapperSegmentConstructsRequest $args)
    {
        $result = parent::listNetworkMigrationMapperSegmentConstructs($args->toArray());
        return new ListNetworkMigrationMapperSegmentConstructsResponse($result->toArray());
    }
}
