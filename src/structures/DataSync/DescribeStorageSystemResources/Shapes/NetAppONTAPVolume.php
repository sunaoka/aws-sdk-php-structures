<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VolumeName
 * @property string|null $ResourceId
 * @property int<0, max>|null $CifsShareCount
 * @property string|null $SecurityStyle
 * @property string|null $SvmUuid
 * @property string|null $SvmName
 * @property int<0, max>|null $CapacityUsed
 * @property int<0, max>|null $CapacityProvisioned
 * @property int<0, max>|null $LogicalCapacityUsed
 * @property bool|null $NfsExported
 * @property int<0, max>|null $SnapshotCapacityUsed
 * @property MaxP95Performance|null $MaxP95Performance
 * @property list<Recommendation>|null $Recommendations
 * @property 'NONE'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|null $RecommendationStatus
 * @property int<0, max>|null $LunCount
 */
class NetAppONTAPVolume extends Shape
{
    /**
     * @param array{
     *     VolumeName?: string|null,
     *     ResourceId?: string|null,
     *     CifsShareCount?: int<0, max>|null,
     *     SecurityStyle?: string|null,
     *     SvmUuid?: string|null,
     *     SvmName?: string|null,
     *     CapacityUsed?: int<0, max>|null,
     *     CapacityProvisioned?: int<0, max>|null,
     *     LogicalCapacityUsed?: int<0, max>|null,
     *     NfsExported?: bool|null,
     *     SnapshotCapacityUsed?: int<0, max>|null,
     *     MaxP95Performance?: MaxP95Performance|null,
     *     Recommendations?: list<Recommendation>|null,
     *     RecommendationStatus?: 'NONE'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|null,
     *     LunCount?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
