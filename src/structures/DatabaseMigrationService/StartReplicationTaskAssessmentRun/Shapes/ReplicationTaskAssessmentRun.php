<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartReplicationTaskAssessmentRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReplicationTaskAssessmentRunArn
 * @property string|null $ReplicationTaskArn
 * @property string|null $Status
 * @property \Aws\Api\DateTimeResult|null $ReplicationTaskAssessmentRunCreationDate
 * @property ReplicationTaskAssessmentRunProgress|null $AssessmentProgress
 * @property string|null $LastFailureMessage
 * @property string|null $ServiceAccessRoleArn
 * @property string|null $ResultLocationBucket
 * @property string|null $ResultLocationFolder
 * @property string|null $ResultEncryptionMode
 * @property string|null $ResultKmsKeyArn
 * @property string|null $AssessmentRunName
 * @property bool|null $IsLatestTaskAssessmentRun
 * @property ReplicationTaskAssessmentRunResultStatistic|null $ResultStatistic
 */
class ReplicationTaskAssessmentRun extends Shape
{
    /**
     * @param array{
     *     ReplicationTaskAssessmentRunArn?: string|null,
     *     ReplicationTaskArn?: string|null,
     *     Status?: string|null,
     *     ReplicationTaskAssessmentRunCreationDate?: \Aws\Api\DateTimeResult|null,
     *     AssessmentProgress?: ReplicationTaskAssessmentRunProgress|null,
     *     LastFailureMessage?: string|null,
     *     ServiceAccessRoleArn?: string|null,
     *     ResultLocationBucket?: string|null,
     *     ResultLocationFolder?: string|null,
     *     ResultEncryptionMode?: string|null,
     *     ResultKmsKeyArn?: string|null,
     *     AssessmentRunName?: string|null,
     *     IsLatestTaskAssessmentRun?: bool|null,
     *     ResultStatistic?: ReplicationTaskAssessmentRunResultStatistic|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
