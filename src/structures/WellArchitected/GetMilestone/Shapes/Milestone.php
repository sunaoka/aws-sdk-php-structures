<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetMilestone\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100> $MilestoneNumber
 * @property string $MilestoneName
 * @property \Aws\Api\DateTimeResult $RecordedAt
 * @property Workload $Workload
 */
class Milestone extends Shape
{
    /**
     * @param array{
     *     MilestoneNumber?: int<1, 100>,
     *     MilestoneName?: string,
     *     RecordedAt?: \Aws\Api\DateTimeResult,
     *     Workload?: Workload
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
