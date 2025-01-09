<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeComputeEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $computeEnvironments
 * @property int $maxResults
 * @property string $nextToken
 */
class DescribeComputeEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     computeEnvironments?: list<string>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
