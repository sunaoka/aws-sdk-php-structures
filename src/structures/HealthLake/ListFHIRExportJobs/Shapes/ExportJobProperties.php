<?php

namespace Sunaoka\Aws\Structures\HealthLake\ListFHIRExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobId
 * @property string|null $JobName
 * @property 'SUBMITTED'|'QUEUED'|'IN_PROGRESS'|'COMPLETED_WITH_ERRORS'|'COMPLETED'|'FAILED'|'CANCEL_SUBMITTED'|'CANCEL_IN_PROGRESS'|'CANCEL_COMPLETED'|'CANCEL_FAILED' $JobStatus
 * @property \Aws\Api\DateTimeResult $SubmitTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string $DatastoreId
 * @property OutputDataConfig $OutputDataConfig
 * @property string|null $DataAccessRoleArn
 * @property string|null $Message
 */
class ExportJobProperties extends Shape
{
    /**
     * @param array{
     *     JobId: string,
     *     JobName?: string|null,
     *     JobStatus: 'SUBMITTED'|'QUEUED'|'IN_PROGRESS'|'COMPLETED_WITH_ERRORS'|'COMPLETED'|'FAILED'|'CANCEL_SUBMITTED'|'CANCEL_IN_PROGRESS'|'CANCEL_COMPLETED'|'CANCEL_FAILED',
     *     SubmitTime: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     DatastoreId: string,
     *     OutputDataConfig: OutputDataConfig,
     *     DataAccessRoleArn?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
