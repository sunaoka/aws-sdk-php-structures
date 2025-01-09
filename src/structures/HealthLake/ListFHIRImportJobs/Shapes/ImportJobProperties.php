<?php

namespace Sunaoka\Aws\Structures\HealthLake\ListFHIRImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobId
 * @property string $JobName
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED_WITH_ERRORS'|'COMPLETED'|'FAILED'|'CANCEL_SUBMITTED'|'CANCEL_IN_PROGRESS'|'CANCEL_COMPLETED'|'CANCEL_FAILED' $JobStatus
 * @property \Aws\Api\DateTimeResult $SubmitTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $DatastoreId
 * @property InputDataConfig $InputDataConfig
 * @property OutputDataConfig $JobOutputDataConfig
 * @property JobProgressReport $JobProgressReport
 * @property string $DataAccessRoleArn
 * @property string $Message
 */
class ImportJobProperties extends Shape
{
    /**
     * @param array{
     *     JobId: string,
     *     JobName?: string,
     *     JobStatus: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED_WITH_ERRORS'|'COMPLETED'|'FAILED'|'CANCEL_SUBMITTED'|'CANCEL_IN_PROGRESS'|'CANCEL_COMPLETED'|'CANCEL_FAILED',
     *     SubmitTime: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     DatastoreId: string,
     *     InputDataConfig: InputDataConfig,
     *     JobOutputDataConfig?: OutputDataConfig,
     *     JobProgressReport?: JobProgressReport,
     *     DataAccessRoleArn?: string,
     *     Message?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
