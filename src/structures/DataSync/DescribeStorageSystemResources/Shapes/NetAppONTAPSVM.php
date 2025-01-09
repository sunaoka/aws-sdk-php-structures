<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterUuid
 * @property string $ResourceId
 * @property string $SvmName
 * @property int<0, max> $CifsShareCount
 * @property list<string> $EnabledProtocols
 * @property int<0, max> $TotalCapacityUsed
 * @property int<0, max> $TotalCapacityProvisioned
 * @property int<0, max> $TotalLogicalCapacityUsed
 * @property MaxP95Performance $MaxP95Performance
 * @property list<Recommendation> $Recommendations
 * @property int<0, max> $NfsExportedVolumes
 * @property 'NONE'|'IN_PROGRESS'|'COMPLETED'|'FAILED' $RecommendationStatus
 * @property int<0, max> $TotalSnapshotCapacityUsed
 * @property int<0, max> $LunCount
 */
class NetAppONTAPSVM extends Shape
{
    /**
     * @param array{
     *     ClusterUuid?: string,
     *     ResourceId?: string,
     *     SvmName?: string,
     *     CifsShareCount?: int<0, max>,
     *     EnabledProtocols?: list<string>,
     *     TotalCapacityUsed?: int<0, max>,
     *     TotalCapacityProvisioned?: int<0, max>,
     *     TotalLogicalCapacityUsed?: int<0, max>,
     *     MaxP95Performance?: MaxP95Performance,
     *     Recommendations?: list<Recommendation>,
     *     NfsExportedVolumes?: int<0, max>,
     *     RecommendationStatus?: 'NONE'|'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     TotalSnapshotCapacityUsed?: int<0, max>,
     *     LunCount?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
