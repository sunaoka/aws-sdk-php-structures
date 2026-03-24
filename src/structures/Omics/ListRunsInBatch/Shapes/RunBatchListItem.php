<?php

namespace Sunaoka\Aws\Structures\Omics\ListRunsInBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $runSettingId
 * @property string|null $runId
 * @property string|null $runInternalUuid
 * @property string|null $runArn
 * @property 'SUCCESS'|'FAILED'|'CANCEL_SUCCESS'|'CANCEL_FAILED'|'DELETE_SUCCESS'|'DELETE_FAILED'|null $submissionStatus
 * @property string|null $submissionFailureReason
 * @property string|null $submissionFailureMessage
 */
class RunBatchListItem extends Shape
{
    /**
     * @param array{
     *     runSettingId?: string|null,
     *     runId?: string|null,
     *     runInternalUuid?: string|null,
     *     runArn?: string|null,
     *     submissionStatus?: 'SUCCESS'|'FAILED'|'CANCEL_SUCCESS'|'CANCEL_FAILED'|'DELETE_SUCCESS'|'DELETE_FAILED'|null,
     *     submissionFailureReason?: string|null,
     *     submissionFailureMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
