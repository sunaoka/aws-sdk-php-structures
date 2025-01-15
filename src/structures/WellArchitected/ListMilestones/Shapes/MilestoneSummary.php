<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListMilestones\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100>|null $MilestoneNumber
 * @property string|null $MilestoneName
 * @property \Aws\Api\DateTimeResult|null $RecordedAt
 * @property WorkloadSummary|null $WorkloadSummary
 */
class MilestoneSummary extends Shape
{
    /**
     * @param array{
     *     MilestoneNumber?: int<1, 100>|null,
     *     MilestoneName?: string|null,
     *     RecordedAt?: \Aws\Api\DateTimeResult|null,
     *     WorkloadSummary?: WorkloadSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
