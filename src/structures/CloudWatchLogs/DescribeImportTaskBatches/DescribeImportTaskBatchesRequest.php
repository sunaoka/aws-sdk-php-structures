<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeImportTaskBatches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $importId
 * @property list<'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED'>|null $batchImportStatus
 * @property int<1, 50>|null $limit
 * @property string|null $nextToken
 */
class DescribeImportTaskBatchesRequest extends Request
{
    /**
     * @param array{
     *     importId: string,
     *     batchImportStatus?: list<'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED'>|null,
     *     limit?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
