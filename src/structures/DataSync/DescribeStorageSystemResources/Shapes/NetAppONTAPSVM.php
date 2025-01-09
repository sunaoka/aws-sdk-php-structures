<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterUuid
 * @property string $ResourceId
 * @property string $SvmName
 * @property int $CifsShareCount
 * @property list<string> $EnabledProtocols
 * @property int $TotalCapacityUsed
 * @property int $TotalCapacityProvisioned
 * @property int $TotalLogicalCapacityUsed
 * @property MaxP95Performance $MaxP95Performance
 * @property list<Recommendation> $Recommendations
 * @property int $NfsExportedVolumes
 * @property 'NONE'|'IN_PROGRESS'|'COMPLETED'|'FAILED' $RecommendationStatus
 * @property int $TotalSnapshotCapacityUsed
 * @property int $LunCount
 */
class NetAppONTAPSVM extends Shape
{
    /**
     * @param array{
     *     ClusterUuid?: string,
     *     ResourceId?: string,
     *     SvmName?: string,
     *     CifsShareCount?: int,
     *     EnabledProtocols?: list<string>,
     *     TotalCapacityUsed?: int,
     *     TotalCapacityProvisioned?: int,
     *     TotalLogicalCapacityUsed?: int,
     *     MaxP95Performance?: MaxP95Performance,
     *     Recommendations?: list<Recommendation>,
     *     NfsExportedVolumes?: int,
     *     RecommendationStatus?: 'NONE'|'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     TotalSnapshotCapacityUsed?: int,
     *     LunCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
