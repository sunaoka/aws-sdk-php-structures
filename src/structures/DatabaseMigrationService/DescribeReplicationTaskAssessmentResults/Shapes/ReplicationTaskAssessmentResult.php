<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationTaskAssessmentResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReplicationTaskIdentifier
 * @property string|null $ReplicationTaskArn
 * @property \Aws\Api\DateTimeResult|null $ReplicationTaskLastAssessmentDate
 * @property string|null $AssessmentStatus
 * @property string|null $AssessmentResultsFile
 * @property string|null $AssessmentResults
 * @property string|null $S3ObjectUrl
 */
class ReplicationTaskAssessmentResult extends Shape
{
    /**
     * @param array{
     *     ReplicationTaskIdentifier?: string|null,
     *     ReplicationTaskArn?: string|null,
     *     ReplicationTaskLastAssessmentDate?: \Aws\Api\DateTimeResult|null,
     *     AssessmentStatus?: string|null,
     *     AssessmentResultsFile?: string|null,
     *     AssessmentResults?: string|null,
     *     S3ObjectUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
