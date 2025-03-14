<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobLogItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobID
 * @property int<1, max>|null $maxResults
 * @property string|null $nextToken
 */
class DescribeJobLogItemsRequest extends Request
{
    /**
     * @param array{
     *     jobID: string,
     *     maxResults?: int<1, max>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
