<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CancelReplicationTaskAssessmentRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $IndividualAssessmentCount
 * @property int $IndividualAssessmentCompletedCount
 */
class ReplicationTaskAssessmentRunProgress extends Shape
{
    /**
     * @param array{
     *     IndividualAssessmentCount?: int,
     *     IndividualAssessmentCompletedCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
