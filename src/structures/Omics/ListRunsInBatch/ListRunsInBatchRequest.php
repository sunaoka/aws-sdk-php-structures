<?php

namespace Sunaoka\Aws\Structures\Omics\ListRunsInBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $batchId
 * @property int<1, 100>|null $maxItems
 * @property string|null $startingToken
 * @property 'SUCCESS'|'FAILED'|'CANCEL_SUCCESS'|'CANCEL_FAILED'|'DELETE_SUCCESS'|'DELETE_FAILED'|null $submissionStatus
 * @property string|null $runSettingId
 * @property string|null $runId
 */
class ListRunsInBatchRequest extends Request
{
    /**
     * @param array{
     *     batchId: string,
     *     maxItems?: int<1, 100>|null,
     *     startingToken?: string|null,
     *     submissionStatus?: 'SUCCESS'|'FAILED'|'CANCEL_SUCCESS'|'CANCEL_FAILED'|'DELETE_SUCCESS'|'DELETE_FAILED'|null,
     *     runSettingId?: string|null,
     *     runId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
