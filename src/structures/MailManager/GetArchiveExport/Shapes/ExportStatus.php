<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CompletionTimestamp
 * @property string $ErrorMessage
 * @property 'QUEUED'|'PREPROCESSING'|'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLED' $State
 * @property \Aws\Api\DateTimeResult $SubmissionTimestamp
 */
class ExportStatus extends Shape
{
    /**
     * @param array{
     *     CompletionTimestamp?: \Aws\Api\DateTimeResult,
     *     ErrorMessage?: string,
     *     State?: 'QUEUED'|'PREPROCESSING'|'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLED',
     *     SubmissionTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
