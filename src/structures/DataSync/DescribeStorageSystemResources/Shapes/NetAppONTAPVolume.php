<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VolumeName
 * @property string $ResourceId
 * @property int<0, max> $CifsShareCount
 * @property string $SecurityStyle
 * @property string $SvmUuid
 * @property string $SvmName
 * @property int<0, max> $CapacityUsed
 * @property int<0, max> $CapacityProvisioned
 * @property int<0, max> $LogicalCapacityUsed
 * @property bool $NfsExported
 * @property int<0, max> $SnapshotCapacityUsed
 * @property MaxP95Performance $MaxP95Performance
 * @property list<Recommendation> $Recommendations
 * @property 'NONE'|'IN_PROGRESS'|'COMPLETED'|'FAILED' $RecommendationStatus
 * @property int<0, max> $LunCount
 */
class NetAppONTAPVolume extends Shape
{
    /**
     * @param array{
     *     VolumeName?: string,
     *     ResourceId?: string,
     *     CifsShareCount?: int<0, max>,
     *     SecurityStyle?: string,
     *     SvmUuid?: string,
     *     SvmName?: string,
     *     CapacityUsed?: int<0, max>,
     *     CapacityProvisioned?: int<0, max>,
     *     LogicalCapacityUsed?: int<0, max>,
     *     NfsExported?: bool,
     *     SnapshotCapacityUsed?: int<0, max>,
     *     MaxP95Performance?: MaxP95Performance,
     *     Recommendations?: list<Recommendation>,
     *     RecommendationStatus?: 'NONE'|'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     LunCount?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
