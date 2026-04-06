<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $IndividualAssessmentCount
 * @property int|null $IndividualAssessmentCompletedCount
 */
class ReplicationTaskAssessmentRunProgress extends Shape
{
    /**
     * @param array{
     *     IndividualAssessmentCount?: int|null,
     *     IndividualAssessmentCompletedCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
