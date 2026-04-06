<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationTaskAssessmentRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Passed
 * @property int|null $Failed
 * @property int|null $Error
 * @property int|null $Warning
 * @property int|null $Cancelled
 * @property int|null $Skipped
 */
class ReplicationTaskAssessmentRunResultStatistic extends Shape
{
    /**
     * @param array{
     *     Passed?: int|null,
     *     Failed?: int|null,
     *     Error?: int|null,
     *     Warning?: int|null,
     *     Cancelled?: int|null,
     *     Skipped?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
