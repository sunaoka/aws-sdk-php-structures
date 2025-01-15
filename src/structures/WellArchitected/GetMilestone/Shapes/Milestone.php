<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetMilestone\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100>|null $MilestoneNumber
 * @property string|null $MilestoneName
 * @property \Aws\Api\DateTimeResult|null $RecordedAt
 * @property Workload|null $Workload
 */
class Milestone extends Shape
{
    /**
     * @param array{
     *     MilestoneNumber?: int<1, 100>|null,
     *     MilestoneName?: string|null,
     *     RecordedAt?: \Aws\Api\DateTimeResult|null,
     *     Workload?: Workload|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
