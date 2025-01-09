<?php

namespace Sunaoka\Aws\Structures\VoiceID\ListSpeakerEnrollmentJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $DomainId
 * @property \Aws\Api\DateTimeResult $EndedAt
 * @property FailureDetails $FailureDetails
 * @property string $JobId
 * @property string $JobName
 * @property JobProgress $JobProgress
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED' $JobStatus
 */
class SpeakerEnrollmentJobSummary extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     DomainId?: string,
     *     EndedAt?: \Aws\Api\DateTimeResult,
     *     FailureDetails?: FailureDetails,
     *     JobId?: string,
     *     JobName?: string,
     *     JobProgress?: JobProgress,
     *     JobStatus?: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
