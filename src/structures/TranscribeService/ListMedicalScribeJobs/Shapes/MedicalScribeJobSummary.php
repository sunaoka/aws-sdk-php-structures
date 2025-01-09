<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListMedicalScribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MedicalScribeJobName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $CompletionTime
 * @property 'en-US' $LanguageCode
 * @property 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED' $MedicalScribeJobStatus
 * @property string $FailureReason
 */
class MedicalScribeJobSummary extends Shape
{
    /**
     * @param array{
     *     MedicalScribeJobName?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     CompletionTime?: \Aws\Api\DateTimeResult,
     *     LanguageCode?: 'en-US',
     *     MedicalScribeJobStatus?: 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED',
     *     FailureReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
