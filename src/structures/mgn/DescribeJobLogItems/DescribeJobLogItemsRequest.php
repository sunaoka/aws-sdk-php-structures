<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeJobLogItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property string $jobID
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class DescribeJobLogItemsRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string,
     *     jobID: string,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
