<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\ListDICOMImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property string $jobName
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED' $jobStatus
 * @property string $datastoreId
 * @property string $dataAccessRoleArn
 * @property \Aws\Api\DateTimeResult $endedAt
 * @property \Aws\Api\DateTimeResult $submittedAt
 * @property string $message
 */
class DICOMImportJobSummary extends Shape
{
    /**
     * @param array{
     *     jobId: string,
     *     jobName: string,
     *     jobStatus: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     datastoreId: string,
     *     dataAccessRoleArn?: string,
     *     endedAt?: \Aws\Api\DateTimeResult,
     *     submittedAt?: \Aws\Api\DateTimeResult,
     *     message?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
