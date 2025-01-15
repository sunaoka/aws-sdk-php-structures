<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\GetDICOMImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property string $jobName
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED' $jobStatus
 * @property string $datastoreId
 * @property string $dataAccessRoleArn
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property \Aws\Api\DateTimeResult|null $submittedAt
 * @property string $inputS3Uri
 * @property string $outputS3Uri
 * @property string|null $message
 */
class DICOMImportJobProperties extends Shape
{
    /**
     * @param array{
     *     jobId: string,
     *     jobName: string,
     *     jobStatus: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     datastoreId: string,
     *     dataAccessRoleArn: string,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     submittedAt?: \Aws\Api\DateTimeResult|null,
     *     inputS3Uri: string,
     *     outputS3Uri: string,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
