<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchResultExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExportJobIdentifier
 * @property string $ExportJobArn
 * @property 'RUNNING'|'FAILED'|'COMPLETED' $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $CompletionTime
 * @property string $StatusMessage
 * @property string $SearchJobArn
 */
class ExportJobSummary extends Shape
{
    /**
     * @param array{
     *     ExportJobIdentifier: string,
     *     ExportJobArn?: string,
     *     Status?: 'RUNNING'|'FAILED'|'COMPLETED',
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     CompletionTime?: \Aws\Api\DateTimeResult,
     *     StatusMessage?: string,
     *     SearchJobArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
