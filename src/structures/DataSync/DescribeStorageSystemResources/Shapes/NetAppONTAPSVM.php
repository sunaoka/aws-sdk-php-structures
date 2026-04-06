<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterUuid
 * @property string|null $ResourceId
 * @property string|null $SvmName
 * @property int<0, max>|null $CifsShareCount
 * @property list<string>|null $EnabledProtocols
 * @property int<0, max>|null $TotalCapacityUsed
 * @property int<0, max>|null $TotalCapacityProvisioned
 * @property int<0, max>|null $TotalLogicalCapacityUsed
 * @property MaxP95Performance|null $MaxP95Performance
 * @property list<Recommendation>|null $Recommendations
 * @property int<0, max>|null $NfsExportedVolumes
 * @property 'NONE'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|null $RecommendationStatus
 * @property int<0, max>|null $TotalSnapshotCapacityUsed
 * @property int<0, max>|null $LunCount
 */
class NetAppONTAPSVM extends Shape
{
    /**
     * @param array{
     *     ClusterUuid?: string|null,
     *     ResourceId?: string|null,
     *     SvmName?: string|null,
     *     CifsShareCount?: int<0, max>|null,
     *     EnabledProtocols?: list<string>|null,
     *     TotalCapacityUsed?: int<0, max>|null,
     *     TotalCapacityProvisioned?: int<0, max>|null,
     *     TotalLogicalCapacityUsed?: int<0, max>|null,
     *     MaxP95Performance?: MaxP95Performance|null,
     *     Recommendations?: list<Recommendation>|null,
     *     NfsExportedVolumes?: int<0, max>|null,
     *     RecommendationStatus?: 'NONE'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|null,
     *     TotalSnapshotCapacityUsed?: int<0, max>|null,
     *     LunCount?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
