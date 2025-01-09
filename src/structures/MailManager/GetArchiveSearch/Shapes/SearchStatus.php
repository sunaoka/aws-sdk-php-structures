<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveSearch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CompletionTimestamp
 * @property string $ErrorMessage
 * @property 'QUEUED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLED' $State
 * @property \Aws\Api\DateTimeResult $SubmissionTimestamp
 */
class SearchStatus extends Shape
{
    /**
     * @param array{
     *     CompletionTimestamp?: \Aws\Api\DateTimeResult,
     *     ErrorMessage?: string,
     *     State?: 'QUEUED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLED',
     *     SubmissionTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
