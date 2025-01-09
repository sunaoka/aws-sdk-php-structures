<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CifsShareCount
 * @property int $NfsExportedVolumes
 * @property string $ResourceId
 * @property string $ClusterName
 * @property MaxP95Performance $MaxP95Performance
 * @property int $ClusterBlockStorageSize
 * @property int $ClusterBlockStorageUsed
 * @property int $ClusterBlockStorageLogicalUsed
 * @property list<Recommendation> $Recommendations
 * @property 'NONE'|'IN_PROGRESS'|'COMPLETED'|'FAILED' $RecommendationStatus
 * @property int $LunCount
 * @property int $ClusterCloudStorageUsed
 */
class NetAppONTAPCluster extends Shape
{
    /**
     * @param array{
     *     CifsShareCount?: int,
     *     NfsExportedVolumes?: int,
     *     ResourceId?: string,
     *     ClusterName?: string,
     *     MaxP95Performance?: MaxP95Performance,
     *     ClusterBlockStorageSize?: int,
     *     ClusterBlockStorageUsed?: int,
     *     ClusterBlockStorageLogicalUsed?: int,
     *     Recommendations?: list<Recommendation>,
     *     RecommendationStatus?: 'NONE'|'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     LunCount?: int,
     *     ClusterCloudStorageUsed?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
