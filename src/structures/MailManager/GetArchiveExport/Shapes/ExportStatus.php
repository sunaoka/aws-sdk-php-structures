<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CompletionTimestamp
 * @property string|null $ErrorMessage
 * @property 'QUEUED'|'PREPROCESSING'|'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLED'|null $State
 * @property \Aws\Api\DateTimeResult|null $SubmissionTimestamp
 */
class ExportStatus extends Shape
{
    /**
     * @param array{
     *     CompletionTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ErrorMessage?: string|null,
     *     State?: 'QUEUED'|'PREPROCESSING'|'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLED'|null,
     *     SubmissionTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
