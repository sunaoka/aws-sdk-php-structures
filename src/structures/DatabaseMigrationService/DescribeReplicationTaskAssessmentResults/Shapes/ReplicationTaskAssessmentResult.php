<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationTaskAssessmentResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReplicationTaskIdentifier
 * @property string $ReplicationTaskArn
 * @property \Aws\Api\DateTimeResult $ReplicationTaskLastAssessmentDate
 * @property string $AssessmentStatus
 * @property string $AssessmentResultsFile
 * @property string $AssessmentResults
 * @property string $S3ObjectUrl
 */
class ReplicationTaskAssessmentResult extends Shape
{
    /**
     * @param array{
     *     ReplicationTaskIdentifier?: string,
     *     ReplicationTaskArn?: string,
     *     ReplicationTaskLastAssessmentDate?: \Aws\Api\DateTimeResult,
     *     AssessmentStatus?: string,
     *     AssessmentResultsFile?: string,
     *     AssessmentResults?: string,
     *     S3ObjectUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
