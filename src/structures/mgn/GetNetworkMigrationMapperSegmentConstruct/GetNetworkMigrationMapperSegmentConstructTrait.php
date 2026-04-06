<?php

namespace Sunaoka\Aws\Structures\mgn\GetNetworkMigrationMapperSegmentConstruct;

trait GetNetworkMigrationMapperSegmentConstructTrait
{
    /**
     * @param GetNetworkMigrationMapperSegmentConstructRequest $args
     * @return GetNetworkMigrationMapperSegmentConstructResponse
     */
    public function getNetworkMigrationMapperSegmentConstruct(GetNetworkMigrationMapperSegmentConstructRequest $args)
    {
        $result = parent::getNetworkMigrationMapperSegmentConstruct($args->toArray());
        return new GetNetworkMigrationMapperSegmentConstructResponse($result->toArray());
    }
}
