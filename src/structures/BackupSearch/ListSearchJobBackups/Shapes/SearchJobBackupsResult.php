<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchJobBackups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RUNNING'|'COMPLETED'|'STOPPING'|'STOPPED'|'FAILED'|null $Status
 * @property string|null $StatusMessage
 * @property 'S3'|'EBS'|null $ResourceType
 * @property string|null $BackupResourceArn
 * @property string|null $SourceResourceArn
 * @property \Aws\Api\DateTimeResult|null $IndexCreationTime
 * @property \Aws\Api\DateTimeResult|null $BackupCreationTime
 */
class SearchJobBackupsResult extends Shape
{
    /**
     * @param array{
     *     Status?: 'RUNNING'|'COMPLETED'|'STOPPING'|'STOPPED'|'FAILED'|null,
     *     StatusMessage?: string|null,
     *     ResourceType?: 'S3'|'EBS'|null,
     *     BackupResourceArn?: string|null,
     *     SourceResourceArn?: string|null,
     *     IndexCreationTime?: \Aws\Api\DateTimeResult|null,
     *     BackupCreationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
