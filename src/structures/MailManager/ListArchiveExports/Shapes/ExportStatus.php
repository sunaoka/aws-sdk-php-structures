<?php

namespace Sunaoka\Aws\Structures\MailManager\ListArchiveExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $SubmissionTimestamp
 * @property \Aws\Api\DateTimeResult|null $CompletionTimestamp
 * @property 'QUEUED'|'PREPROCESSING'|'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLED'|null $State
 * @property string|null $ErrorMessage
 */
class ExportStatus extends Shape
{
    /**
     * @param array{
     *     SubmissionTimestamp?: \Aws\Api\DateTimeResult|null,
     *     CompletionTimestamp?: \Aws\Api\DateTimeResult|null,
     *     State?: 'QUEUED'|'PREPROCESSING'|'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLED'|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
