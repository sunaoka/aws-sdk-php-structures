<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteReplicationTaskAssessmentRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReplicationTaskAssessmentRunArn
 * @property string $ReplicationTaskArn
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $ReplicationTaskAssessmentRunCreationDate
 * @property ReplicationTaskAssessmentRunProgress $AssessmentProgress
 * @property string $LastFailureMessage
 * @property string $ServiceAccessRoleArn
 * @property string $ResultLocationBucket
 * @property string $ResultLocationFolder
 * @property string $ResultEncryptionMode
 * @property string $ResultKmsKeyArn
 * @property string $AssessmentRunName
 * @property bool $IsLatestTaskAssessmentRun
 * @property ReplicationTaskAssessmentRunResultStatistic $ResultStatistic
 */
class ReplicationTaskAssessmentRun extends Shape
{
    /**
     * @param array{
     *     ReplicationTaskAssessmentRunArn?: string,
     *     ReplicationTaskArn?: string,
     *     Status?: string,
     *     ReplicationTaskAssessmentRunCreationDate?: \Aws\Api\DateTimeResult,
     *     AssessmentProgress?: ReplicationTaskAssessmentRunProgress,
     *     LastFailureMessage?: string,
     *     ServiceAccessRoleArn?: string,
     *     ResultLocationBucket?: string,
     *     ResultLocationFolder?: string,
     *     ResultEncryptionMode?: string,
     *     ResultKmsKeyArn?: string,
     *     AssessmentRunName?: string,
     *     IsLatestTaskAssessmentRun?: bool,
     *     ResultStatistic?: ReplicationTaskAssessmentRunResultStatistic
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
