<?php

namespace Sunaoka\Aws\Structures\Omics\GetBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $successfulStartSubmissionCount
 * @property int|null $failedStartSubmissionCount
 * @property int|null $pendingStartSubmissionCount
 * @property int|null $successfulCancelSubmissionCount
 * @property int|null $failedCancelSubmissionCount
 * @property int|null $successfulDeleteSubmissionCount
 * @property int|null $failedDeleteSubmissionCount
 */
class SubmissionSummary extends Shape
{
    /**
     * @param array{
     *     successfulStartSubmissionCount?: int|null,
     *     failedStartSubmissionCount?: int|null,
     *     pendingStartSubmissionCount?: int|null,
     *     successfulCancelSubmissionCount?: int|null,
     *     failedCancelSubmissionCount?: int|null,
     *     successfulDeleteSubmissionCount?: int|null,
     *     failedDeleteSubmissionCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
