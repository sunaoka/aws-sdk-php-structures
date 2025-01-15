<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationTaskIndividualAssessments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReplicationTaskIndividualAssessmentArn
 * @property string|null $ReplicationTaskAssessmentRunArn
 * @property string|null $IndividualAssessmentName
 * @property string|null $Status
 * @property \Aws\Api\DateTimeResult|null $ReplicationTaskIndividualAssessmentStartDate
 */
class ReplicationTaskIndividualAssessment extends Shape
{
    /**
     * @param array{
     *     ReplicationTaskIndividualAssessmentArn?: string|null,
     *     ReplicationTaskAssessmentRunArn?: string|null,
     *     IndividualAssessmentName?: string|null,
     *     Status?: string|null,
     *     ReplicationTaskIndividualAssessmentStartDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
