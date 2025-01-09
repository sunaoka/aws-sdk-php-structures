<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchJobBackups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RUNNING'|'COMPLETED'|'STOPPING'|'STOPPED'|'FAILED' $Status
 * @property string $StatusMessage
 * @property 'S3'|'EBS' $ResourceType
 * @property string $BackupResourceArn
 * @property string $SourceResourceArn
 * @property \Aws\Api\DateTimeResult $IndexCreationTime
 * @property \Aws\Api\DateTimeResult $BackupCreationTime
 */
class SearchJobBackupsResult extends Shape
{
    /**
     * @param array{
     *     Status?: 'RUNNING'|'COMPLETED'|'STOPPING'|'STOPPED'|'FAILED',
     *     StatusMessage?: string,
     *     ResourceType?: 'S3'|'EBS',
     *     BackupResourceArn?: string,
     *     SourceResourceArn?: string,
     *     IndexCreationTime?: \Aws\Api\DateTimeResult,
     *     BackupCreationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
