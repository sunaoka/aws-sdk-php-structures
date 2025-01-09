<?php

namespace Sunaoka\Aws\Structures\VoiceID\StartSpeakerEnrollmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $DataAccessRoleArn
 * @property string $DomainId
 * @property \Aws\Api\DateTimeResult $EndedAt
 * @property EnrollmentConfig $EnrollmentConfig
 * @property FailureDetails $FailureDetails
 * @property InputDataConfig $InputDataConfig
 * @property string $JobId
 * @property string $JobName
 * @property JobProgress $JobProgress
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED' $JobStatus
 * @property OutputDataConfig $OutputDataConfig
 */
class SpeakerEnrollmentJob extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     DataAccessRoleArn?: string,
     *     DomainId?: string,
     *     EndedAt?: \Aws\Api\DateTimeResult,
     *     EnrollmentConfig?: EnrollmentConfig,
     *     FailureDetails?: FailureDetails,
     *     InputDataConfig?: InputDataConfig,
     *     JobId?: string,
     *     JobName?: string,
     *     JobProgress?: JobProgress,
     *     JobStatus?: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED',
     *     OutputDataConfig?: OutputDataConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
