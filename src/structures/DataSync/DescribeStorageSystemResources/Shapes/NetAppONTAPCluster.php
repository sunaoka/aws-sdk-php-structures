<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $CifsShareCount
 * @property int<0, max>|null $NfsExportedVolumes
 * @property string|null $ResourceId
 * @property string|null $ClusterName
 * @property MaxP95Performance|null $MaxP95Performance
 * @property int<0, max>|null $ClusterBlockStorageSize
 * @property int<0, max>|null $ClusterBlockStorageUsed
 * @property int<0, max>|null $ClusterBlockStorageLogicalUsed
 * @property list<Recommendation>|null $Recommendations
 * @property 'NONE'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|null $RecommendationStatus
 * @property int<0, max>|null $LunCount
 * @property int<0, max>|null $ClusterCloudStorageUsed
 */
class NetAppONTAPCluster extends Shape
{
    /**
     * @param array{
     *     CifsShareCount?: int<0, max>|null,
     *     NfsExportedVolumes?: int<0, max>|null,
     *     ResourceId?: string|null,
     *     ClusterName?: string|null,
     *     MaxP95Performance?: MaxP95Performance|null,
     *     ClusterBlockStorageSize?: int<0, max>|null,
     *     ClusterBlockStorageUsed?: int<0, max>|null,
     *     ClusterBlockStorageLogicalUsed?: int<0, max>|null,
     *     Recommendations?: list<Recommendation>|null,
     *     RecommendationStatus?: 'NONE'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|null,
     *     LunCount?: int<0, max>|null,
     *     ClusterCloudStorageUsed?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
