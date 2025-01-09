<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListMailboxExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobId
 * @property string $EntityId
 * @property string $Description
 * @property string $S3BucketName
 * @property string $S3Path
 * @property int<0, 100> $EstimatedProgress
 * @property 'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLED' $State
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 */
class MailboxExportJob extends Shape
{
    /**
     * @param array{
     *     JobId?: string,
     *     EntityId?: string,
     *     Description?: string,
     *     S3BucketName?: string,
     *     S3Path?: string,
     *     EstimatedProgress?: int<0, 100>,
     *     State?: 'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLED',
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
