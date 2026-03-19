<?php

namespace Sunaoka\Aws\Structures\Batch\ListQuotaShares;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobQueue
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class ListQuotaSharesRequest extends Request
{
    /**
     * @param array{
     *     jobQueue: string,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
