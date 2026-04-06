<?php

namespace Sunaoka\Aws\Structures\Omics\ListBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxItems
 * @property string|null $startingToken
 * @property 'PENDING'|'SUBMITTING'|'INPROGRESS'|'STOPPING'|'CANCELLED'|'FAILED'|'PROCESSED'|'RUNS_DELETING'|'RUNS_DELETED'|null $status
 * @property string|null $name
 * @property string|null $runGroupId
 */
class ListBatchRequest extends Request
{
    /**
     * @param array{
     *     maxItems?: int<1, 100>|null,
     *     startingToken?: string|null,
     *     status?: 'PENDING'|'SUBMITTING'|'INPROGRESS'|'STOPPING'|'CANCELLED'|'FAILED'|'PROCESSED'|'RUNS_DELETING'|'RUNS_DELETED'|null,
     *     name?: string|null,
     *     runGroupId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
