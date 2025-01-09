<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListMilestones\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MilestoneNumber
 * @property string $MilestoneName
 * @property \Aws\Api\DateTimeResult $RecordedAt
 * @property WorkloadSummary $WorkloadSummary
 */
class MilestoneSummary extends Shape
{
    /**
     * @param array{
     *     MilestoneNumber?: int,
     *     MilestoneName?: string,
     *     RecordedAt?: \Aws\Api\DateTimeResult,
     *     WorkloadSummary?: WorkloadSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
