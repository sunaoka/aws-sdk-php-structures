<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DescribeRecoveryInstancesRequestFilters $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class DescribeRecoveryInstancesRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\DescribeRecoveryInstancesRequestFilters,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
