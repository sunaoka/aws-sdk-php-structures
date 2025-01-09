<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $CifsShareCount
 * @property int<0, max> $NfsExportedVolumes
 * @property string $ResourceId
 * @property string $ClusterName
 * @property MaxP95Performance $MaxP95Performance
 * @property int<0, max> $ClusterBlockStorageSize
 * @property int<0, max> $ClusterBlockStorageUsed
 * @property int<0, max> $ClusterBlockStorageLogicalUsed
 * @property list<Recommendation> $Recommendations
 * @property 'NONE'|'IN_PROGRESS'|'COMPLETED'|'FAILED' $RecommendationStatus
 * @property int<0, max> $LunCount
 * @property int<0, max> $ClusterCloudStorageUsed
 */
class NetAppONTAPCluster extends Shape
{
    /**
     * @param array{
     *     CifsShareCount?: int<0, max>,
     *     NfsExportedVolumes?: int<0, max>,
     *     ResourceId?: string,
     *     ClusterName?: string,
     *     MaxP95Performance?: MaxP95Performance,
     *     ClusterBlockStorageSize?: int<0, max>,
     *     ClusterBlockStorageUsed?: int<0, max>,
     *     ClusterBlockStorageLogicalUsed?: int<0, max>,
     *     Recommendations?: list<Recommendation>,
     *     RecommendationStatus?: 'NONE'|'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     LunCount?: int<0, max>,
     *     ClusterCloudStorageUsed?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
