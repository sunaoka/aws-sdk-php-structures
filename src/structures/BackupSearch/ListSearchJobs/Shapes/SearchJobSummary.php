<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SearchJobIdentifier
 * @property string $SearchJobArn
 * @property string $Name
 * @property 'RUNNING'|'COMPLETED'|'STOPPING'|'STOPPED'|'FAILED' $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $CompletionTime
 * @property SearchScopeSummary $SearchScopeSummary
 * @property string $StatusMessage
 */
class SearchJobSummary extends Shape
{
    /**
     * @param array{
     *     SearchJobIdentifier?: string,
     *     SearchJobArn?: string,
     *     Name?: string,
     *     Status?: 'RUNNING'|'COMPLETED'|'STOPPING'|'STOPPED'|'FAILED',
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     CompletionTime?: \Aws\Api\DateTimeResult,
     *     SearchScopeSummary?: SearchScopeSummary,
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
