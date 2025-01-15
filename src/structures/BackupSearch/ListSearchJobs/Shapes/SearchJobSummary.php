<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SearchJobIdentifier
 * @property string|null $SearchJobArn
 * @property string|null $Name
 * @property 'RUNNING'|'COMPLETED'|'STOPPING'|'STOPPED'|'FAILED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $CompletionTime
 * @property SearchScopeSummary|null $SearchScopeSummary
 * @property string|null $StatusMessage
 */
class SearchJobSummary extends Shape
{
    /**
     * @param array{
     *     SearchJobIdentifier?: string|null,
     *     SearchJobArn?: string|null,
     *     Name?: string|null,
     *     Status?: 'RUNNING'|'COMPLETED'|'STOPPING'|'STOPPED'|'FAILED'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     CompletionTime?: \Aws\Api\DateTimeResult|null,
     *     SearchScopeSummary?: SearchScopeSummary|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
