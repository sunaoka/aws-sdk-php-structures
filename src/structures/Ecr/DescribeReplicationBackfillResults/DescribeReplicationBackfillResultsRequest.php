<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeReplicationBackfillResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property string $replicationBackfillId
 * @property 'COMPLETE'|'FAILED'|null $resultStatusFilter
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class DescribeReplicationBackfillResultsRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     replicationBackfillId: string,
     *     resultStatusFilter?: 'COMPLETE'|'FAILED'|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
