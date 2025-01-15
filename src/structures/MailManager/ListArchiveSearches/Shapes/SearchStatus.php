<?php

namespace Sunaoka\Aws\Structures\MailManager\ListArchiveSearches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CompletionTimestamp
 * @property string|null $ErrorMessage
 * @property 'QUEUED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLED'|null $State
 * @property \Aws\Api\DateTimeResult|null $SubmissionTimestamp
 */
class SearchStatus extends Shape
{
    /**
     * @param array{
     *     CompletionTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ErrorMessage?: string|null,
     *     State?: 'QUEUED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLED'|null,
     *     SubmissionTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
