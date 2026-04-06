<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListMedicalScribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MedicalScribeJobName
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $CompletionTime
 * @property 'en-US'|null $LanguageCode
 * @property 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|null $MedicalScribeJobStatus
 * @property string|null $FailureReason
 */
class MedicalScribeJobSummary extends Shape
{
    /**
     * @param array{
     *     MedicalScribeJobName?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     CompletionTime?: \Aws\Api\DateTimeResult|null,
     *     LanguageCode?: 'en-US'|null,
     *     MedicalScribeJobStatus?: 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|null,
     *     FailureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
