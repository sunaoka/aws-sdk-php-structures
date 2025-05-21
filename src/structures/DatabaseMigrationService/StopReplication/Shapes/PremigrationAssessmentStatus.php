<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StopReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PremigrationAssessmentRunArn
 * @property bool|null $FailOnAssessmentFailure
 * @property string|null $Status
 * @property \Aws\Api\DateTimeResult|null $PremigrationAssessmentRunCreationDate
 * @property ReplicationTaskAssessmentRunProgress|null $AssessmentProgress
 * @property string|null $LastFailureMessage
 * @property string|null $ResultLocationBucket
 * @property string|null $ResultLocationFolder
 * @property string|null $ResultEncryptionMode
 * @property string|null $ResultKmsKeyArn
 * @property ReplicationTaskAssessmentRunResultStatistic|null $ResultStatistic
 */
class PremigrationAssessmentStatus extends Shape
{
    /**
     * @param array{
     *     PremigrationAssessmentRunArn?: string|null,
     *     FailOnAssessmentFailure?: bool|null,
     *     Status?: string|null,
     *     PremigrationAssessmentRunCreationDate?: \Aws\Api\DateTimeResult|null,
     *     AssessmentProgress?: ReplicationTaskAssessmentRunProgress|null,
     *     LastFailureMessage?: string|null,
     *     ResultLocationBucket?: string|null,
     *     ResultLocationFolder?: string|null,
     *     ResultEncryptionMode?: string|null,
     *     ResultKmsKeyArn?: string|null,
     *     ResultStatistic?: ReplicationTaskAssessmentRunResultStatistic|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
