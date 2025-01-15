<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListMailboxExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobId
 * @property string|null $EntityId
 * @property string|null $Description
 * @property string|null $S3BucketName
 * @property string|null $S3Path
 * @property int<0, 100>|null $EstimatedProgress
 * @property 'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLED'|null $State
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 */
class MailboxExportJob extends Shape
{
    /**
     * @param array{
     *     JobId?: string|null,
     *     EntityId?: string|null,
     *     Description?: string|null,
     *     S3BucketName?: string|null,
     *     S3Path?: string|null,
     *     EstimatedProgress?: int<0, 100>|null,
     *     State?: 'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLED'|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
