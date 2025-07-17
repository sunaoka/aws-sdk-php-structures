<?php

namespace Sunaoka\Aws\Structures\MailManager\ListArchiveSearches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $SubmissionTimestamp
 * @property \Aws\Api\DateTimeResult|null $CompletionTimestamp
 * @property 'QUEUED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLED'|null $State
 * @property string|null $ErrorMessage
 */
class SearchStatus extends Shape
{
    /**
     * @param array{
     *     SubmissionTimestamp?: \Aws\Api\DateTimeResult|null,
     *     CompletionTimestamp?: \Aws\Api\DateTimeResult|null,
     *     State?: 'QUEUED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLED'|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
