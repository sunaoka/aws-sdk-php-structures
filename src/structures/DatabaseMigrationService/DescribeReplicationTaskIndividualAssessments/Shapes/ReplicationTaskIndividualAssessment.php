<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationTaskIndividualAssessments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReplicationTaskIndividualAssessmentArn
 * @property string $ReplicationTaskAssessmentRunArn
 * @property string $IndividualAssessmentName
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $ReplicationTaskIndividualAssessmentStartDate
 */
class ReplicationTaskIndividualAssessment extends Shape
{
    /**
     * @param array{
     *     ReplicationTaskIndividualAssessmentArn?: string,
     *     ReplicationTaskAssessmentRunArn?: string,
     *     IndividualAssessmentName?: string,
     *     Status?: string,
     *     ReplicationTaskIndividualAssessmentStartDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
