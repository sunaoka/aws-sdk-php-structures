<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteReplicationTaskAssessmentRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Passed
 * @property int $Failed
 * @property int $Error
 * @property int $Warning
 * @property int $Cancelled
 */
class ReplicationTaskAssessmentRunResultStatistic extends Shape
{
    /**
     * @param array{
     *     Passed?: int,
     *     Failed?: int,
     *     Error?: int,
     *     Warning?: int,
     *     Cancelled?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
