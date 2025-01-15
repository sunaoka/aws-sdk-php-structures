<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeComputeEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $computeEnvironments
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class DescribeComputeEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     computeEnvironments?: list<string>|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
