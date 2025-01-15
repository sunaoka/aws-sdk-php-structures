<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\ListDICOMImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property string $jobName
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED' $jobStatus
 * @property string $datastoreId
 * @property string|null $dataAccessRoleArn
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property \Aws\Api\DateTimeResult|null $submittedAt
 * @property string|null $message
 */
class DICOMImportJobSummary extends Shape
{
    /**
     * @param array{
     *     jobId: string,
     *     jobName: string,
     *     jobStatus: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     datastoreId: string,
     *     dataAccessRoleArn?: string|null,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     submittedAt?: \Aws\Api\DateTimeResult|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
