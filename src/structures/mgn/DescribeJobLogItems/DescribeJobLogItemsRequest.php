<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeJobLogItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountID
 * @property string $jobID
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class DescribeJobLogItemsRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string|null,
     *     jobID: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
