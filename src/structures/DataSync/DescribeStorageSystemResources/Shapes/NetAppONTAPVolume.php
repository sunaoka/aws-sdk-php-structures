<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VolumeName
 * @property string $ResourceId
 * @property int $CifsShareCount
 * @property string $SecurityStyle
 * @property string $SvmUuid
 * @property string $SvmName
 * @property int $CapacityUsed
 * @property int $CapacityProvisioned
 * @property int $LogicalCapacityUsed
 * @property bool $NfsExported
 * @property int $SnapshotCapacityUsed
 * @property MaxP95Performance $MaxP95Performance
 * @property list<Recommendation> $Recommendations
 * @property 'NONE'|'IN_PROGRESS'|'COMPLETED'|'FAILED' $RecommendationStatus
 * @property int $LunCount
 */
class NetAppONTAPVolume extends Shape
{
    /**
     * @param array{
     *     VolumeName?: string,
     *     ResourceId?: string,
     *     CifsShareCount?: int,
     *     SecurityStyle?: string,
     *     SvmUuid?: string,
     *     SvmName?: string,
     *     CapacityUsed?: int,
     *     CapacityProvisioned?: int,
     *     LogicalCapacityUsed?: int,
     *     NfsExported?: bool,
     *     SnapshotCapacityUsed?: int,
     *     MaxP95Performance?: MaxP95Performance,
     *     Recommendations?: list<Recommendation>,
     *     RecommendationStatus?: 'NONE'|'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     LunCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
