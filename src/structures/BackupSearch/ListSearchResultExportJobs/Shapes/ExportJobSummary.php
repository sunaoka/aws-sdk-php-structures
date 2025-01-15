<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchResultExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExportJobIdentifier
 * @property string|null $ExportJobArn
 * @property 'RUNNING'|'FAILED'|'COMPLETED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $CompletionTime
 * @property string|null $StatusMessage
 * @property string|null $SearchJobArn
 */
class ExportJobSummary extends Shape
{
    /**
     * @param array{
     *     ExportJobIdentifier: string,
     *     ExportJobArn?: string|null,
     *     Status?: 'RUNNING'|'FAILED'|'COMPLETED'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     CompletionTime?: \Aws\Api\DateTimeResult|null,
     *     StatusMessage?: string|null,
     *     SearchJobArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
