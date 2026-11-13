<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BaselineBytes
 * @property string|null $Deviation
 * @property int|null $ProfileAgeDays
 * @property string|null $RemoteService
 * @property string|null $RemoteRegion
 * @property string|null $Duration
 * @property string|null $ResetRatio
 * @property int<0, max>|null $TargetHostCount
 */
class NetworkAnomaly extends Shape
{
    /**
     * @param array{
     *     BaselineBytes?: string|null,
     *     Deviation?: string|null,
     *     ProfileAgeDays?: int|null,
     *     RemoteService?: string|null,
     *     RemoteRegion?: string|null,
     *     Duration?: string|null,
     *     ResetRatio?: string|null,
     *     TargetHostCount?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
