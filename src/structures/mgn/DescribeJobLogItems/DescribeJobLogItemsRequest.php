<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeJobLogItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobID
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $accountID
 */
class DescribeJobLogItemsRequest extends Request
{
    /**
     * @param array{
     *     jobID: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
